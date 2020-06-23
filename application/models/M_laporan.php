<?php
class M_laporan extends CI_Model
{

    function tampil_user()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id', 2);

        return $this->db->get()->result_array();
    }


    function getBarangByID($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }
    function tampil_input()
    {
        $tampil = $this->db->query("SELECT * FROM keluar");
        return $tampil;
    }

    function Tdiagnosa()
    {
        $this->db->query("SELECT * FROM user JOIN diagnosa ON id=id_user");

        return $this->db->get()->result_array();
    }

    public function join($trecking_id)
    {
        $this->db->select('*');
        $this->db->from('diagnosa');
        $this->db->join('keluar', 'diagnosa.id_user = keluar.id_userK');
        $this->db->join('tamu', 'diagnosa.id_user = tamu.id_user');
        $this->db->where('diagnosa.id_user', $trecking_id);

        return $this->db->get()->result_array();
    }
}
