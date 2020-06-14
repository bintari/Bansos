<?php
class M_laporan extends CI_Model
{

    function tampil_user()
    {
        $tampil = $this->db->query("SELECT * FROM user WHERE role_id=2");

        return $tampil;
    }

    function getUserByID($id_user)
    {
        $this->db->select('*');
        $this->db->from('keluar');
        $this->db->where('id_userK', $id_user);
        return $this->db->get()->row_array();
    }

    function tampil_input()
    {
        $tampil = $this->db->query("SELECT * FROM keluar");
        return $tampil;

    }
}
