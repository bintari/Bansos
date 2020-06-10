<?php
class Pantauan extends CI_Controller

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
    public function kesehatan()
    {
        $data['tittle'] = "Pantauan Pemudik";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('soal1', 'Perlu dijawab', 'required|trim');
        $this->form_validation->set_rules('soal2', 'Perlu dijawab', 'required|trim');
        $this->form_validation->set_rules('soal3', 'Perlu dijawab', 'required|trim');
        $this->form_validation->set_rules('soal4', 'Perlu dijawab', 'required|trim');
        $this->form_validation->set_rules('soal5', 'Perlu dijawab', 'required|trim');
        $this->form_validation->set_rules('soal6', 'Perlu dijawab', 'required|trim');
        $this->form_validation->set_rules('soal7', 'Perlu dijawab', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pantauan/kesehatan');
            $this->load->view('templates/footer');
        } else {
            $soal1 = $this->input->post('soal1');
            $soal2 = $this->input->post('soal2');
            $soal3 = $this->input->post('soal3');
            $soal4 = $this->input->post('soal4');
            $soal5 = $this->input->post('soal5');
            $soal6 = $this->input->post('soal6');
            $soal7 = $this->input->post('soal7');
            $jawaban = $soal1 . ',' . $soal2 . ',' . $soal3 . ',' . $soal4 . ',' . $soal5 . ',' . $soal6 . ',' . $soal7;

            if ($jawaban == "1,0,0,0,0,0,0") {
                $hasil = "Demam";
                print $hasil;
                if ($jawaban == "1,1,0,0,0,0,0") {
                    $hasil = "Demam batuk";
                    print $hasil;
                  } elseif ($jawaban == "0,1,0,0,0,0,0") {
                    $hasil = "batuk";
                    print $hasil;
                }
            } elseif ($jawaban == "1,1,1,1,1,1,1") {
                $hasil = "dicurigai";
                print $hasil;
            }

            $data = [
                'id_diagnosa'       => '',
                'id_user'           => $data['user']['id'],
                'hasil'             => $hasil
            ];

            $this->db->insert('diagnosa', $data);

            redirect('user');
        }
    }



    public function interaksi()
    {
        $data['tittle'] = "Pantauan Pemudik";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_keluar', 'nama_keluar', 'required|trim');
        $this->form_validation->set_rules('alamat_keluar', 'alamat_keluar', 'required|trim');
        $this->form_validation->set_rules('tujuan_keluar', 'tujuan_keluar', 'required|trim');
        $this->form_validation->set_rules('waktu_keluar', 'waktu_keluar', 'required|trim');
        $this->form_validation->set_rules('waktu_keluar', 'waktu_pulang', 'required|trim');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pantauan/interaksi');
            $this->load->view('templates/footer');

            // $this->load->view('pantauan/interaksi');
        } else {
            $nama_keluar = $this->input->post('nama_keluar');
            $alamat_keluar = $this->input->post('alamat_keluar');
            $tujuan_keluar = $this->input->post('tujuan_keluar');
            $waktu_keluar = $this->input->post('waktu_keluar');
            $waktu_pulang = $this->input->post('waktu_pulang');
            $id_user        = $data['user']['id'];

            $data = array(
                'id_keluar'     => '',
                'id_userK'      => $id_user,
                'nama_keluar'   => $nama_keluar,
                'alamat_keluar' => $alamat_keluar,
                'tujuan_keluar' => $tujuan_keluar,
                'waktu_keluar'  => $waktu_keluar,
                'waktu_pulang'  => $waktu_pulang,
                // 'd_created'     => date_create()
            );



            $this->db->insert('keluar', $data);
            redirect('auth');
        }
    }
}
