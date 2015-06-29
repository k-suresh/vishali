<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beneficial extends CI_Controller {
    public function index()
    {                        
        $this->mytemplate->addCSS(array("admin"));
        $data['assets'] = $this->mytemplate->load_JS_and_css();        
        $query = $this->db->get('beneficial');
        $data['data'] = $query->result();        
        $this->load->view('beneficial',$data);

    }
    public function add() {
        if(isset($_POST['submit']) && $_POST['submit'] == "Submit") {
            extract($_POST);
            $imageNames = $this->uploadfile();            
            $insert= array("name"=>$name,
                            "image" => $imageNames,
                            "school" => $school,
                            "class" => $class,
                            "parent" => $parent,
                            "address" => $address,
                            "phone" => $phone,
                            "added_date" => date("Y-m-d"));
            $this->db->insert("beneficial",$insert);
            redirect('beneficial/index/?msg=1','Location');
        }

        $this->mytemplate->addCSS(array("admin"));
        $data['assets'] = $this->mytemplate->load_JS_and_css();
        $this->load->view('add_beneficial',$data);         
    }
    
    function uploadfile()
    {
        $location = (pathinfo($_SERVER['SCRIPT_FILENAME']));
        $uploads_dir = $location['dirname']."/assets/uploads/";        
        $fileNames = "";            
        $tmp_name = $_FILES["image"]["tmp_name"];
        $name = $_FILES["image"]["name"];
        $fileExtension = pathinfo($name,PATHINFO_EXTENSION);
        $newfilename = "beneficial_".$loop."_".date("ymdhms").'.'.$fileExtension; 
        $fulldest = $uploads_dir.$newfilename;
        if (move_uploaded_file($tmp_name, $fulldest)) {
            return $newfilename;
        } else {
            exit("Error File Uploadin");
        }
    }
}