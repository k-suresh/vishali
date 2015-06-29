<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {
	public function indexss()
	{
            $this->mytemplate->addCSS(array("thumbnail-gallery","ekko-lightbox.css","dark.css"));
            $this->mytemplate->addJS(array("ekko-lightbox"));
            $data['assets'] = $this->mytemplate->load_JS_and_css();
            
            
            $this->load->view('home',$data);
	}
	public function index()
	{                        
            $this->mytemplate->addCSS(array("admin"));
            //$this->mytemplate->addJS(array("jquery.dataTables.min","dataTables.bootstrap"));
            
            //Pagination
       /*     $this->load->library('pagination');
            $currPage = ($this->uri->segment(3)) ? $this->uri->segment(3) : "" ;
            $config['per_page'] = 2;
            if($currPage<2)
                    $currPage = "";   
            $config['base_url'] = $this->config->site_url()."dashboard/index";     

            
            $this->db->select("user.*");		
            $query = $this->db->get('user',$config['per_page'],$currPage);
            $data['data'] = $query->result();
            $config['cur_page'] = $data['cur_page'] = $currPage;
            $config['total_rows'] = $this->db->count_all_results('user');
            $this->pagination->initialize($config);	
            $data['pagination'] = $this->pagination->create_links();            
         */   $data['assets'] = $this->mytemplate->load_JS_and_css();
            
            $this->load->view('project_list',$data);

	}        
}