<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
            $this->mytemplate->addCSS(array("thumbnail-gallery","ekko-lightbox.css","dark.css"));
            $this->mytemplate->addJS(array("ekko-lightbox"));
            $data['assets'] = $this->mytemplate->load_JS_and_css();
            
            
            $this->load->view('home',$data);
	}
}