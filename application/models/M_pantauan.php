<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pantauan extends CI_Model

{
    // public function tampil_user()
    // {
    //     $this->db->select('*');
    //     $this->db->from('user');

    //     return $this->db->get()->result_array();
    // }
    // public function tampilkeluar($id_user)
    // {

    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array;


    //     $id_user        = $data['user']['id'];


    //     $tampil = $this->db->query("SELECT * FROM user WHERE id_userK=$id_user");
    //     return $tampil;
    // }
    // function getInputToday($id_user, $today)
    // {
    //     $this->db->select('*');
    //     $this->db->from('keluar');
    //     $this->db->where('id_userK', $id_user);

    //     $this->db->like('d_createdK', $today);
    //     return $this->db->get()->result_array();
    // }

    // function getInputTodaytamu($id_user, $today)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tamu');
    //     $this->db->where('id_userT', $id_user);

    //     $this->db->like('d_createdT', $today);
    //     return $this->db->get()->result_array();
    // }

    // public function kesehatanwaktu($id_user)
    // {
    //     $this->db->select('*');
    //     $this->db->from('diagnosa');
    //     $this->db->where('id_userD', $id_user);
    //     $this->db->order_by('d_createdD', 'DESC');

    //     return $this->db->get()->row_array();
    // }
    // // public function interaksiwaktu($id_user)
    // // {
    // //     $this->db->select('*');
    // //     $this->db->from('keluar');
    // //     $this->db->where('id_userK', $id_user);
    // //     $this->db->order_by('d_createdK', 'DESC');

    // //     return $this->db->get()->row_array();
    // // }
    // public function tamusudahisi($id_user)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tamu');
    //     $this->db->where('id_userT', $id_user);
    //     $this->db->order_by('d_createdT', 'DESC');

    //     return $this->db->get()->row_array();
    // }

    // public function tamuwaktu($id_user)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tamu');
    //     $this->db->where('id_userT', $id_user);
    //     $this->db->order_by('d_createdT', 'DESC');

    //     return $this->db->get()->row_array();
    // }
    // public function kadaluarsa($id_user)
    // {
    //     $this->db->select('*');
    //     $this->db->from('user');
    //     $this->db->where('id', $id_user);
    //     return $this->db->get()->row_array();
    // }
}
