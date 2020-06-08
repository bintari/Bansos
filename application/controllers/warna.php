<?php
defined('BASEPATH') or exit('No direct script access allowed');

class warna extends CI_Controller
{
    // model
    // public function insertwarna($data)
    // {
    //     $this->db->insert('warana',$data);
    // }

    // public function tampil_warna($data)
    // {
    //     return $this->db->get('warana')->result();
    // }

    // public function index(){
    //     $data['tampil_warna'] = $this->warna_m->tampil_warna();
    //     $this->load->view('warna',$data);
    // }

    public function insert()
    {
        $this->load->view('warna');
        $check = $this->input->post('checklist');
        $warna = implode(",", $check);

        $this->warna_m->insertwarna(array(
            'option' => $warna
        ));

        redirect('user');
        $this->load->view('warna');
    }
}
