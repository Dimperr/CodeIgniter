<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tabel extends CI_Controller 
{
    public function view ($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/Duplicate/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->model("BiodataModel");
        $data = array("Biodata" => $this->BiodataModel->get_data());

        $this->load->database();
        $this->load->helper('url');
        $this->load->view('Tabel/pages/'.$page, $data);
    }
}
