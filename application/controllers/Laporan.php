<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->model('m_laporan');
    }

    public function index()
    {
        $data['tittle'] = "Laporan";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $tampil['user'] = $this->m_laporan->tampil_user();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/user', $tampil);
        $this->load->view('templates/footer');
    }
    public function treking()
    {
        $data['tittle'] = "Trecking";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $tampil['keluar'] = $this->m_laporan->tampil_keluar();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/user', $tampil);
        $this->load->view('templates/footer');
    }
}
