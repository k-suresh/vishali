<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {
    public function index()
    {                        
        //$this->mytemplate->addCSS(array("thumbnail-gallery","ekko-lightbox","dark"));
        //$this->mytemplate->addJS(array("ekko-lightbox"));
        $data['assets'] = $this->mytemplate->load_JS_and_css();
        $query = $this->db->get('news');
        $data['data'] = $query->result();
        $this->load->view('event',$data);

    }
    public function add() {
        if(isset($_POST['submit']) && $_POST['submit'] == "Submit") {
            extract($_POST);
            $insert = array("title" => $title,"comments" => $comments,"added_date"=>date("Y-m-d"));
            $this->db->insert("news",$insert);
            redirect('event/index/?msg=1','Location');
        }
        $this->mytemplate->addCSS(array("admin"));
        //$this->mytemplate->addJS(array("jquery.dataTables.min","dataTables.bootstrap")); 
        $data['assets'] = $this->mytemplate->load_JS_and_css();
         $this->load->view('add_event',$data);
         
    }
}