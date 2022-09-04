<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class web extends CI_Controller 
{
    public function view ($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/Duplicate/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->helper('url');
        $this->load->view('Duplicate/template/header', $data);
        $this->load->view('Duplicate/pages/'.$page, $data);
        $this->load->view('Duplicate/template/footer', $data);
    }
}
