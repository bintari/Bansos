<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
    }

    public function index()
    {
        $data['tittle'] = "Laporan";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('m_laporan');
        $data['userK'] = $this->m_laporan->tampil_user();


        $data['userK'] = $this->db->get('user')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/user', $data);
        // $this->load->view('pantauan/tampiltamu', $data);

        $this->load->view('templates/footer');
    }



    public function sendemail()
    {
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'pantaupemudik@gmail.com',  // Email gmail
            'smtp_pass'   => 'Semester6',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];
        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('pantaupemudik@gmail.com');

        // Email penerima
        $this->email->to('bbintari13@gmail.com'); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject('Kirim Email dengan SMTP Gmail CodeIgniter | MasRud.com');

        // Isi email
        $this->email->message("Ini adalah contoh email yang dikirim menggunakan SMTP Gmail pada CodeIgniter.<br><br> Klik <strong><a href='https://masrud.com/post/kirim-email-dengan-smtp-gmail' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }

    public function trecking($trecking_id)
    {
        $data['tittle'] = "Tracking";


        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();     
        $data['userK'] = $this->db->get_where('user', ['id' => $trecking_id])->row_array();


        $this->load->model('m_laporan');
        $data['treking'] = $this->m_laporan->join($trecking_id);


        
        


        // $this->load->model('m_laporan');
        // $data['Tdiagnosa'] = $this->m_laporan->Tdiagnosa($trecking_id);
    

        // $this->load->model('m_laporan');
        // $data['Tkeluar'] = $this->m_laporan->trecking_keluar();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/trecking', $data);
        $this->load->view('templates/footer');
    }

   
}
