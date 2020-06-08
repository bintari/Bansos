<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pantauan extends CI_Model

{
    public function input_data($data)
    {
        $this->db->insert('keluar', $data);
        return true;
        
    }
}

?>