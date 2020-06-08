<?php
class pantauan extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        is_log_in();
    }
    public function index()
    {
        // $data['tittle'] = "Pantauan Pemudik";
        // $data['user'] = $this->db->get_where('user', ['email' =>
        // $this->session->userdata('email')])->row_array();
    
        // $nama_keluar = $this->input->post('nama_keluar');
        // $alamat_keluar = $this->input->post('alamat_keluar');
        // $tujuan_keluar = $this->input->post('tujuan_keluar');
        // $waktu_keluar = $this->input->post('waktu_keluar');
    
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar', $data);
        $this->load->view('pantauan/pantaun');
        // $this->load->view('templates/footer');
    
        // $data = array(
    
        //     'nama_keluar' => $nama_keluar,
        //     'alamat_keluar' => $alamat_keluar,
        //     'tujuan_keluar' => $tujuan_keluar,
        //     'waktu_keluar' => $waktu_keluar
        // );
    
        // $this->pantauan_model->input_data($data);
    
        // redirect('user/pantauan');
    }
}
