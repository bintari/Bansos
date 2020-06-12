<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_log_in();
        
    }

    public function index()
    {
        $data['tittle'] = "My  Profile";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['tittle'] = "Edit Profile";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $name = $this->input->post('name');
            $emai = $this->input->post('email');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path']          = './assets/img/profile/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->displaay_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $emai);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your profile has been updated</div>');

            redirect('user');
        }
    }

    public function changepassword()
    {
        $data['tittle'] = "Change Password";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Conform New Password', 'required|trim|min_length[3]|matches[new_password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Current Password</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', "<div class='alert alert-danger' role='alert'>
                    New password can't be the same as current password</div>");
                    redirect('user/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Change</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

    public function pantauan()
    {
        $data['tittle'] = "Pantauan Pemudik";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_keluar', 'nama_keluar', 'required|trim');
        $this->form_validation->set_rules('alamat_keluar', 'alamat_keluar', 'required|trim');
        $this->form_validation->set_rules('tujuan_keluar', 'tujuan_keluar', 'required|trim');
        $this->form_validation->set_rules('waktu_keluar', 'waktu_keluar', 'required|trim');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pantauan/quisioner');
            $this->load->view('templates/footer');

            // $this->load->view('pantauan/interaksi');
        } else {
            $nama_keluar = $this->input->post('nama_keluar');
            $alamat_keluar = $this->input->post('alamat_keluar');
            $tujuan_keluar = $this->input->post('tujuan_keluar');
            $waktu_keluar = $this->input->post('waktu_keluar');
            $id_user        = $data['user']['id'];

            $data = array(
                'id_keluar'     => '',
                'id_userK'      => $id_user,
                'nama_keluar'   => $nama_keluar,
                'alamat_keluar' => $alamat_keluar,
                'tujuan_keluar' => $tujuan_keluar,
                'waktu_keluar'  => $waktu_keluar
            );

            //     // $tamu_nama = $this->input->post('tamu_nama');
            //     // $tamu_alamat = $this->input->post('tamu_alamat');
            //     // $tamu_waktu = $this->input->post('tamu_waktu');
            //     // $waktu_keluar = $this->input->post('waktu_keluar');

            //     // $data = array(
            //     //     'tamu_nama' => $tamu_nama,
            //     //     'tamu_alamat' => $tamu_alamat,
            //     //     'tamu_waktu' => $tamu_waktu,
            //     //     'waktu_keluar' => $waktu_keluar
            //     // );

            $this->db->insert('keluar', $data);
            redirect('auth');
        }
    }

    public function kesehatan()
    {
        $data['tittle'] = "Pantauan Pemudik";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('soal1', 'Perlu dijawab', 'required|trim');
        // $this->form_validation->set_rules('soal2', 'Perlu dijawab', 'required|trim');
        // $this->form_validation->set_rules('soal3', 'Perlu dijawab', 'required|trim');
        // $this->form_validation->set_rules('soal4', 'Perlu dijawab', 'required|trim');
        // $this->form_validation->set_rules('soal5', 'Perlu dijawab', 'required|trim');
        // $this->form_validation->set_rules('soal6', 'Perlu dijawab', 'required|trim');
        // $this->form_validation->set_rules('soal7', 'Perlu dijawab', 'required|trim');

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

            if ($jawaban == "1,0,0,0,0") {
                $hasil = "Batuk Biasa";
                print $hasil;
                if ($jawaban == "1,1,0,0,0") {
                    $hasil = "Batuk Biasa";
                    echo $hasil;
                    if ($jawaban = "1,1,1,0,0") {
                        $hasil = "Batuk level 2";
                        echo $hasil;
                        if ($jawaban = "1,1,1,1,0") {
                            $hasil = "Batuk level 2";
                            echo $hasil;
                            if ($jawaban = "1,1,1,1,1") {
                                $hasil = "Batuk luar biasa";
                                echo $hasil;
                                //     }else

                                // }else
                            }
                        }
                    } else if ($jawaban = "1,1,0,1,0") {
                        $hasil = "Batuk Biasa";
                        echo $hasil;
                    } else if ($jawaban = "1,0,1,0,0") {
                        $hasil = "Batuk Biasa";
                        echo $hasil;
                    } else {
                    }
                    // }else

                } else if ($jawaban == "0,1,0,0,0") {
                }
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

    public function checkbox()
    {
        $this->load->view('pantauan/quisioner');

        $checkbox = $this->input->post('checklist');
        $quesioner = implode(",", $checkbox);

        $data = array(
            'option' => $quesioner
        );

        $this->db->insert('checkbox', $data);

        redirect('user');
    }
}
