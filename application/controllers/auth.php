<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Log-In";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('login');
            $this->load->view('templates/auth_footer');
        } else {
            //validation success
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //jika usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password.</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This email has not been activated.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email not registered</div>');
            redirect('auth');
        }
    }

    public function regristation()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('id', 'NIK', 'required|trim|max_length[16]|min_length[16]');
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('asal_kota', 'Asal Kota', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tangal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('notelp', 'Notelp', 'required|trim|max_length[14]|min_length[10]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches'   =>  'Password dont matches',
            'min_length' =>  'Password to short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Regristation";

            $this->load->view('templates/auth_header', $data);
            $this->load->view('regristation');
            $this->load->view('templates/auth_footer');
        } else {
            $email  = $this->input->post('email', true);
            $data = [
                'id'            => htmlspecialchars($this->input->post('id', true)),
                'name'          => htmlspecialchars($this->input->post('name', true)),
                'asal_kota'     => htmlspecialchars($this->input->post('asal_kota', true)),
                'tgl_lahir'     => htmlspecialchars($this->input->post('tgl_lahir', true)),
                'alamat'        => htmlspecialchars($this->input->post('alamat', true)),
                'notelp'        => htmlspecialchars($this->input->post('notelp', true)),
                'email'         => htmlspecialchars($email),
                'image'         => 'default.png',
                'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id'       => 2,
                'is_active'     => 0,
                'd_created'     => time()
            ];

            // token 

            // ini bisa pake email tapi harus register dulu emailnya
            // $token = base64_encode(random_bytes(32));
            // $user_token = [
            //     'email' => $email,
            //     'token' => $token,
            //     'date_created' => time()
            // ];
//matiin dulu
            // $this->db->insert('user', $data);
            $this-> _sendEmail();
            // $this->db->insert('user_token', $user_token);


            

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun wisan dadi bisa dinggo </div>');

            // redirect('auth');
        }
    }

    private function _sendEmail()
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'pantaupemudik@gmail.com',
            'smtp_pass' => 'Semester6',
            'smtp_port' => 25,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('pantaupemudik@gmail.com');
        $this->email->to('bbintari13@gmail.com');
        $this->email->subject('Testing');
        $this->email->message('helloword');

        // $this->email->send();

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        };



        // $this->email->to($this->input->post('email'));
        // if ($type == 'verify') {
        //     $this->email->subject('Account Verification');
        //     $this->email->message('Click this link to verify your account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activated</a>');
        // } else if ($type == 'forgot') {
        //     $this->email->subject('Reset Password');
        //     $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        // }


        // if ($this->email->send()) {
        //     return true;
        // } else {
        //     echo $this->email->print_debugger();
        //     die;
        // }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {

                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Account activation success. Please login</div>');

                    redirect('auth');
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Account activation failed! Token expired</div>');

                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Account activation failed! wrong token</div>');

                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Account activation failed! wrong email</div>');

            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You has been logged out</div>');

        redirect('auth');
    }

    public function blocked()
    {
        $data['tittle'] = "404";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('blocked', $data);
        $this->load->view('templates/footer');
    }

    public function forgotPassword()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Forgot Password";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('forgot-password');
            $this->load->view('templates/auth_footer');
        } else {
            $email  = $this->input->post('email');
            $user   = $this->db->get_where('user', ['email' => $email], ['is_active' => 1])->row_array();


            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Please check your email to reset your password!</div>');

                redirect('auth');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email is not registered or activated</div>');

                redirect('auth/forgotPassword');
            }
        }
    }

    public function resetpassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->ChangePassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Reset Password failed. Wrong Token</div>');

                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Reset Password failed. Wrong Email</div>');

            redirect('auth');
        }
    }

    public function ChangePassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        }

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches'   =>  'Password dont matches',
            'min_length' =>  'Password to short'
        ]);
        $this->form_validation->set_rules('password2', 'Repeate Password', 'required|trim|min_length[3]|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Change Password";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('change-password');
            $this->load->view('templates/auth_footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Password has been change</div>');

            redirect('auth');
        }
    }
}
