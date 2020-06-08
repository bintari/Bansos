<?php
class Warna_m extends CI_Model{
    public function insertwarna($data)
    {
        $this->db->insert('checkbox',$data);
    }

    public function tampil_warna($data)
    {
        $this->db->get('checkbox')->result();
    }
}