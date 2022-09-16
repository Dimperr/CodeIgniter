<?php

class BiodataModel extends CI_Model{
    public function get_data(){
        $this->load->database();
        $query = $this->db->get("biodata");
        return $query->result_array();
    }
}