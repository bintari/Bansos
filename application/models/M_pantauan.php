<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pantauan extends CI_Model

{
    public function tampil_user($data)
    {

        $tampil = $this->db->query("SELECT * FROM user WHERE role_id=2");
        return $tampil;
    }
    public function tampilkeluar($id_user)
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array;


        $id_user        = $data['user']['id'];


        $tampil = $this->db->query("SELECT * FROM user WHERE id_userK=$id_user");
        return $tampil;
    }
}
