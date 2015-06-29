<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
    public function index()
    {                        
        $this->mytemplate->addCSS(array("thumbnail-gallery","ekko-lightbox","dark"));
        $this->mytemplate->addJS(array("ekko-lightbox"));
        $data['assets'] = $this->mytemplate->load_JS_and_css();
        $this->db->select("id, name, event_date, GROUP_CONCAT( image SEPARATOR  '**' ) AS event_images"); 
        $this->db->group_by("event_date"); 
        $query = $this->db->get('gallery');
        $data['data'] = $query->result();        
        $this->load->view('gallery',$data);

    }
    public function add() {
        if(isset($_POST['submit']) && $_POST['submit'] == "Submit") {
            extract($_POST);
            $imageNames = $this->uploadfile();
            
            if(is_array($imageNames) && count($imageNames) >0 ) {
                for($loop=0;count($imageNames)>$loop;$loop++) {
                    $insert[] = array("image"=> $imageNames[$loop], "name" => $name,"event_date" => $date,"added_date"=>date("Y-m-d"));
                }
                $this->db->insert_batch("gallery",$insert);
                redirect('gallery/index/?msg=1','Location');
            }
            redirect('gallery/index/?msg=2','Location');
        }
        $this->mytemplate->addCSS(array("admin"));
        //$this->mytemplate->addJS(array("jquery.dataTables.min","dataTables.bootstrap")); 
        $data['assets'] = $this->mytemplate->load_JS_and_css();
         $this->load->view('add_gallery',$data);
         
    }
    function uploadfile()
    {
        $location = (pathinfo($_SERVER['SCRIPT_FILENAME']));
        $uploads_dir = $location['dirname']."/assets/uploads/";
        
        $fileNames = array();
        $loop = 1;
        foreach ($_FILES["image"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["image"]["tmp_name"][$key];
                $name = $_FILES["image"]["name"][$key];
                $fileExtension = pathinfo($name,PATHINFO_EXTENSION);
                $newfilename = "img_".$loop."_".date("ymdhms").'.'.$fileExtension; 
                $fulldest = $uploads_dir.$newfilename;
                move_uploaded_file($tmp_name, $fulldest);
                $fileNames[] = $newfilename;
                $loop++;
            }
        }
        return $fileNames;
    }
}