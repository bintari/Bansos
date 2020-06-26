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

    function userK($trecking_id,$diagnosa)
    {
        
        $this->db->select('*');
        $this->db->from('keluar');        
        $this->db->where('id_userK', $trecking_id);
        // $this->db->get_where('keluar', ['id_userK' => $trecking_id]);
        $this->db->like('d_createdK',$diagnosa);
        return $this->db->get()->result_array();

    }

    public function join($trecking_id)
    {
        $this->db->select('*');
        $this->db->from('diagnosa');
        $this->db->where('diagnosa.id_userD', $trecking_id);
        $this->db->join('keluar', 'diagnosa.id_userD = keluar.id_userK');
        $this->db->join('tamu', 'diagnosa.id_userD = tamu.id_userT');

        return $this->db->get()->result_array();
    }

    
}
