<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller 
{
    public function view ($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/web_1/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('web_1/template/header', $data);
        $this->load->view('web_1/pages/'.$page, $data);
        $this->load->view('web_1/template/footer', $data);
    }
}
