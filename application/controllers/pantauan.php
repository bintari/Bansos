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
      
        $this->load->view('pantauan/pantaun');
        
    }
    public function kesehatan()
    {
        $data['tittle'] = "Pantauan Pemudik";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $id_user       = $data['user']['id'];

        $today      = date('Y-m-d', time());
        $this->load->model('m_pantauan');
        // $kesehatan['d_created'] = $this->db->get('diagnosa')->row_array();
        $kesehatan = $this->m_pantauan->kesehatanwaktu($id_user);

        if ($kesehatan['d_created'] == $today) {
            echo "ada";
        } else {
            echo "tidak ada";
            $this->form_validation->set_rules('soal1', 'Perlu dijawab', 'required|trim');
            $this->form_validation->set_rules('soal1', 'Perlu dijawab', 'required|trim');
            $this->form_validation->set_rules('soal2', 'Perlu dijawab', 'required|trim');
            $this->form_validation->set_rules('soal3', 'Perlu dijawab', 'required|trim');
            $this->form_validation->set_rules('soal4', 'Perlu dijawab', 'required|trim');
            $this->form_validation->set_rules('soal5', 'Perlu dijawab', 'required|trim');
            $id_user        = $data['user']['id'];
            $today = date('y-m-d');

            $this->load->model('m_pantauan');
            $data['tamu'] = $this->m_pantauan->getInputTodaytamu($id_user, $today);
            if ($data)

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
                    $jawaban = $soal1 . ',' . $soal2 . ',' . $soal3 . ',' . $soal4 . ',' . $soal5;

                    if ($jawaban == "1,1,1,1,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,0,0,0,0") {
                        $hasil = "tidak dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,0,0,1,0") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,0,0,0,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "1,0,0,1,0") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,1,0,1,0") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,0,1,1,0") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,0,0,1,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "1,0,0,0,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,1,0,0,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,0,1,0,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "1,1,1,0,0") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "1,1,0,1,0") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "1,0,1,1,0") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,1,1,1,0") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,1,1,0,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,1,0,1,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,0,1,1,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "1,1,1,1,0") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "1,1,1,0,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "1,1,0,1,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "1,0,1,1,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } elseif ($jawaban == "0,1,1,1,1") {
                        $hasil = "dicurigai";
                        print $hasil;
                    } else {
                        $hasil = "tidak dicurigai";
                        print $hasil;
                    }



                    $data = [
                        'id_diagnosa'       => '',
                        'id_user'           => $data['user']['id'],
                        'hasil'             => $hasil,
                        'd_created'     => date('Y-m-d', time())
                    ];

                    $this->db->insert('diagnosa', $data);

                    redirect('user');
                }
        }
    }




    public function interaksi()
    {
        $data['tittle'] = "Pantauan Pemudik";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_keluar', 'Nama_Keluar', 'required|trim', array('required' => 'Harap isi kolom nama tempat yang dikunjungi'));
        $this->form_validation->set_rules('alamat_keluar', 'Alamat_keluar', 'required|trim', array('required' => 'Harap isi kolom alamat tempat yang dikunjungi'));
        $this->form_validation->set_rules('tujuan_keluar', 'tujuan_keluar', 'required|trim', array('required' => 'Harap isi kolom tujuan mengunjungi'));
        $this->form_validation->set_rules('waktu_keluar', 'required|trim', array('required' => 'Harap isi kolom waktu kunjungan'));

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
                'd_created'     => date('Y-m-d')



            );



            $this->db->insert('keluar', $data);
            redirect('pantauan/tampilinteraksi');
            // redirect('auth');
        }
    }

    public function tampilinteraksi()
    {
        $data['tittle'] = "Pantauan Pemudik";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $id_user        = $data['user']['id'];
        $today = date('y-m-d');

        $this->load->model('m_pantauan');
        $data['keluar'] = $this->m_pantauan->getInputToday($id_user, $today);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pantauan/tampilinput', $data);
        $this->load->view('templates/footer');
    }

    public function tamu()
    {
        $data['tittle'] = "Pantauan Pemudik";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $today = date('Y-m-d');
        $tgl2 = date('Y-m-d', strtotime('+14 days', strtotime($today))); //operasi penjumlahan tanggal sebanyak 6 hari

        $this->form_validation->set_rules('tamu_nama', 'tamu_nama', 'required|trim', array('required' => 'Harap isi kolom nama yang mengunjungi'));
        $this->form_validation->set_rules('tamu_alamat', 'tamu_alamat', 'required|trim', array('required' => 'Harap isi kolom alamat yang mengunjungi'));
        $this->form_validation->set_rules('tamu_nomorhp', 'tamu_nomorhp', 'required|trim|min_length[10]|max_length[14]', array('required' => 'Harap isi kolom nomor telepon yang mengunjungi'));
        $this->form_validation->set_rules('tamu_waktu', 'tamu_waktu', 'required|trim', array('required' => 'Harap isi kolom waktu kunjungan'));
        if ($this->form_validation->run() == false) {


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pantauan/tamu');
            $this->load->view('templates/footer');
        } else {
            $tamu_nama = $this->input->post('tamu_nama');
            $tamu_alamat = $this->input->post('tamu_alamat');
            $tamu_nomorhp = $this->input->post('tamu_nomorhp');
            $tamu_waktu = $this->input->post('tamu_waktu');
            $id_user        = $data['user']['id'];


            $data = array(
                'tamu_id'       => '',
                'id_user'       => $id_user,
                'tamu_nama'     => $tamu_nama,
                'tamu_alamat'   => $tamu_alamat,
                'tamu_nomorhp'  => $tamu_nomorhp,
                'tamu_waktu'    => $tamu_waktu,
                'd_created'     => $tgl2
            );

            $this->db->insert('tamu', $data);
            redirect('pantauan/tampiltamu');
        }
    }

    public function tampiltamu()
    {
        $data['tittle'] = "Daftar Tamu Hari Ini";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $id_user        = $data['user']['id'];
        $today = date('y-m-d');

        $this->load->model('m_pantauan');
        $data['tamu'] = $this->m_pantauan->getInputTodaytamu($id_user, $today);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pantauan/tampiltamu', $data);
        $this->load->view('templates/footer');
    }
}
