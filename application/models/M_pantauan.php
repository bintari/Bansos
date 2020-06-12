<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pantauan extends CI_Model

{
    public function tampil_user($data)
    {

        $tampil = $this->db->query("SELECT * FROM user WHERE role_id=2");
        return $tampil;
    }
}
