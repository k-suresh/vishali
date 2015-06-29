<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stories extends CI_Controller {
    public function index()
    {                        
        //$this->mytemplate->addCSS(array("thumbnail-gallery","ekko-lightbox","dark"));
        //$this->mytemplate->addJS(array("ekko-lightbox"));
        $data['assets'] = $this->mytemplate->load_JS_and_css();
        //$this->db->select('title,comments,DATE_FORMAT(story_date,"%d-%b-%Y") as storydate');
        $query = $this->db->get('stories');
        $data['data'] = $query->result();
        $this->load->view('stories',$data);

    }
    public function add() {
        if(isset($_POST['submit']) && $_POST['submit'] == "Submit") {
            extract($_POST);
            $insert = array("title" => $title,"comments" => $comments,"story_date" => $story_date, "added_date"=>date("Y-m-d"));
            $this->db->insert("stories",$insert);
            redirect('stories/index/?msg=1','Location');
        }
        $this->mytemplate->addCSS(array("admin"));
        //$this->mytemplate->addJS(array("jquery.dataTables.min","dataTables.bootstrap")); 
        $data['assets'] = $this->mytemplate->load_JS_and_css();
         $this->load->view('add_stories',$data);
         
    }
}