<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->library('pagination');
        $this->load->helper('url');
        //load the department_model
        $this->load->model('M_Bansos');
    }

    public function regis()
    {
        $data['tittle'] = "Data Bansos";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['tingkat'] = $this->db->get('tingkat')->result_array();
        $this->form_validation->set_rules('name', 'nama', 'required|trim|strtolower');
        $this->form_validation->set_rules(
            'email',
            'Username',
            'required|trim|strtolower|is_unique[user.email]',
            array('required' => 'Harap isi kolom')
        );
        $this->form_validation->set_rules(
            'desa',
            'Desa',
            'required|trim|strtolower',
            array('required' => 'Harap isi kolom')
        );
        $this->form_validation->set_rules(
            'kecamatan',
            'Kecamatan',
            'required|trim|strtolower',
            array('required' => 'Harap isi kolom')
        );
        $this->form_validation->set_rules(
            'kabupaten',
            'Kabupaten',
            'required|trim|strtolower',
            array('required' => 'Harap isi kolom')
        );

        $this->form_validation->set_message('required', '{field} tidak boleh kosong');
        $this->form_validation->set_message('is_unique', '{field} sudah digunakan');;

        //     if ($tingkat == 1) {
        //         $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        //         $data['desa'] = $this->db->get('desa')->result_array();

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/daftaradmin', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $desa = $this->input->post('desa');
            $kecamatan = $this->input->post('kecamatan');
            $kabupaten = $this->input->post('kabupaten');
            $password = $this->input->post('password');
            $role_id = $this->input->post('role_id');

            $data = array(
                'name'      => htmlspecialchars($name),
                'email'     => htmlspecialchars($email),
                'image'     => 'default.png',
                'password'  => password_hash($password, PASSWORD_DEFAULT),
                'desa'      => $desa,
                'kecamatan' => $kecamatan,
                'kabupaten' => $kabupaten,
                'role_id'   => $role_id,
                'is_active'     => 1,
                'd_created'     => time()
            );
            $this->db->insert('user', $data);
            var_dump ($this->db->insert('user', $data));
            // die;
            redirect('daftar/regis');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun berhasil dibuat </div>');
        }
    }

    public function index()
    {

        $this->form_validation->set_rules(
            'name',
            'Nama',
            'required|trim|strtolower',
            array('required' => 'Harap isi kolom')
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|strtolower',
            array('required' => 'Harap isi kolom')
        );
        // $this->form_validation->set_rules(
        //     'desa',
        //     'desa',
        //     'required|trim|strtolower',
        //     array('required' => 'Harap isi kolom')
        // );
        // $this->form_validation->set_rules(
        //     'kecamatan',
        //     'kecamatan',
        //     'required|trim|strtolower',
        //     array('required' => 'Harap isi kolom')
        // );
        // $this->form_validation->set_rules(
        //     'kabupaten',
        //     'kabupaten',
        //     'required|trim|strtolower',
        //     array('required' => 'Harap isi kolom')
        // );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[3]'
        );



        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Regristation";

            $this->load->view('templates/auth_header', $data);
            $this->load->view('regristation');
            $this->load->view('templates/auth_footer');
        } else {
            $email  = $this->input->post('email', true);
            $data = [
                'name'          => htmlspecialchars($this->input->post('name', true)),
                'email'         => htmlspecialchars($email),
                'image'         => 'default.png',
                'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id'       => 2,
                'is_active'     => 1,
                'd_created'     => time()
            ];

            // token 

            // ini bisa pake email tapi harus register dulu emailnya
            // $token = base64_encode(openssl_random_pseudo_bytes(32));
            // var_dump($token);
            // die;
            // $user_token = [
            //     'email' => $email,
            //     'token' => $token,
            //     'date_created' => time()
            // ];
            //matiin dulu
            $this->db->insert('user', $data);
            // $this->db->insert('user_token', $user_token);
            // $this->_sendEmail($token, 'verify');




            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun berhasil dibuat </div>');

            redirect('auth');
        }
    }


    // public function tampiluser()
    // {
    //     $data['tittle'] = "Laporan";
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->model('m_laporan');
    //     $desa      = $data['user']['desa'];

    //     $data['results'] = $this->db->get_where('user', array('role_id' => 2))->result_array();
    //     $data['resultdes'] = $this->db->get_where('user', array('role_id' => 3));
    //     $data['resultkec'] =  $this->db->get_where('user', array('role_id' => 4));


    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     // $this->load->view('bansos/tampil', $data);
    //     $this->load->view('user/user', $data);
    //     $this->load->view('templates/footer');
    //     // }
    // }
    public function tampiluser()
    {
        $data['tittle'] = "Laporan";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->model('m_laporan');
        $desa      = $data['user']['desa'];

        // $verif = $this->db->get_where('databansos', array('verif_desa' => 1)->result_array());

        // die;
        ////////////////////////////////////////
        //set params
        $params = array();
        //set records per page

        // if ($verif) {
        //     $this->load->view('templates/header', $data);
        //     $this->load->view('templates/sidebar', $data);
        //     $this->load->view('templates/topbar', $data);
        //     // $this->load->view('bansos/tampil', $data);
        //     echo 'data belum ditemukan';
        //     $this->load->view('templates/footer');
        // } else {
        $limit_page = 1000;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total = $this->M_Bansos->get_total();
        $data['totaldesa'] = $this->M_Bansos->get_total_desa($desa);
        $data['totaldesa'] = $this->M_Bansos->get_total_desa($desa);
        // var_dump($data['totaldesa']);
        // var_dump($totaldesa);
        if ($total > 0) {
            // get current page records
            $data['results'] = $this->M_Bansos->getuserkab($limit_page, $page * $limit_page);
            $data['resultdes'] = $this->M_Bansos->getuserdes($limit_page, $page * $limit_page);
            $data['resultkec'] = $this->M_Bansos->getuserkec($limit_page, $page * $limit_page);

            $config['base_url'] = base_url() . 'daftar/tampiluser';
            $config['total_rows'] = $total;
            $config['per_page'] = $limit_page;

            //paging configuration
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;

            //bootstrap pagination 
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = '« First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_link'] = 'Last &raquo';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '<li>';
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '<li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';

            $this->pagination->initialize($config);

            // build paging links
            $data['links'] = $this->pagination->create_links();
        } else {
            echo 'data tidak ditemukan';
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        // $this->load->view('bansos/tampil', $data);
        $this->load->view('user/user', $data);
        $this->load->view('templates/footer');
        // }
    }

    public function hapus($email)
    {
        $data['user'] = $this->db->delete('user', ['email' => $email]);
        redirect('daftar/tampiluser');

    }
    public function datamaster()
    {
        $data['tittle'] = "Data Bansos";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['miskin'] = $this->db->get('kemiski')->result_array();

        $data['bansos'] = $this->db->get('bansos')->result_array();
        $data['fasilitas'] = $this->db->get('fasilitas')->result_array();
        $data['jenisbantuan'] = $this->db->get('jenisbantuan')->result_array();
        $data['sumberdana'] = $this->db->get('sumberdana')->result_array();
        $data['tittle'] = "Data Bansos";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('bansos/datamaster', $data);
        $this->load->view('templates/footer');
    }


    public function hasilkab()
    {
        $data['tittle'] = "Cari Kabupaten";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tampil'] = $this->db->get_where('user', array('role_id' => 2));
        $cari = $this->input->get('cari');
        $data['tambahan'] = 'kabupaten';

        if (isset($_GET['cari'])) {
            $searchkab = $this->input->get('cari');
            $this->db->like('kabupaten', $searchkab);
        }
        $data['da'] = $this->db->get_where('user', array('role_id' => 2))->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kab', $data);
        $this->load->view('templates/footer');
        // $data2['cari'] = $this->M_Bansos->carikab();
        // $this->load->view('bansos/result', $data2);
    }
    public function hasilkec()
    {
        $data['tittle'] = "Cari Kecamatan";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tampil'] = $this->db->get_where('user', array('role_id' => 3));
        $cari = $this->input->get('cari');
        $data['tambahan'] = 'kecamatan';

        if (isset($_GET['cari'])) {
            $searchkab = $this->input->get('cari');
            $this->db->like('kecamatan', $searchkab);
        }
        $data['da'] = $this->db->get_where('user', array('role_id' => 3))->result_array();
        // var_dump($data['da']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kab', $data);
        $this->load->view('templates/footer');

        // $data2['cari'] = $this->M_Bansos->carikab();
        // $this->load->view('bansos/result', $data2);
    }
    public function hasildes()
    {
        $data['tittle'] = "Cari Desa";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        if (isset($_GET['cari'])) {
            $data['tampil'] = $this->db->get_where('user', array('role_id' => 4));

            $data['tambahan'] = 'desa';
            $des = $this->input->get('cari');
            $this->db->like('desa', $des);
        }
        $data['da'] = $this->db->get_where('user', array('role_id' => 4))->result_array();
        // var_dump($data['da']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kab', $data);
        $this->load->view('templates/footer');

        // $data2['cari'] = $this->M_Bansos->carikab();
        // $this->load->view('bansos/result', $data2);
    }

    public function editmiskin($idkemiskinan)
    {
        $data['tittle'] = "Detail Penerima Bantuan Sosial";
        $data['kemiski'] = $this->db->get_where('kemiski', ['idkemiskinan' => $idkemiskinan])->row_array();


        $data['miskin'] = $this->db->get('kemiski')->result_array();

        $this->load->view('bansos/editmiskin');
    }
    public function tambahmiskin()
    {
        $data['tittle'] = "Data Bansos";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $idkemiskinan = $this->input->post('idkemiskinan');
        $kemiskinan = $this->input->post('kemiskinan');

        $this->form_validation->set_rules('kemiskinan', 'kemiskinan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('bansos/tambahmiskin', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'idkemiskinan'          => $idkemiskinan,
                'kemiskinan'           => $kemiskinan
            );
            $this->db->insert('kemiski', $data);
        }
        redirect('daftar/datamaster');
    }

    public function editfasilitas($idfasilitas)
    {
        $data['miskin'] = $this->db->get_where('kemiski', ['idfasilitas' => $idfasilitas])->row_array();

        $idfasilitas = $this->input->post('idfasilitas');
        $fasilitas = $this->input->post('kemiskinan');

        $data = array(
            'idfasilitas'          => $idfasilitas,
            'fasilitas'           => $fasilitas
        );
    }
    public function tambahbansos()
    {

        $idbansos = $this->input->post('idbansos');
        $jenis = $this->input->post('jenis');

        $data = array(
            'idbansos'          => $idbansos,
            'jenis'           => $jenis
        );


        $this->db->insert('bansos', $data);
        redirect('daftar/datamaster');
    }
    public function tambahfasilitas()
    {

        $idfasilitas = $this->input->post('idfasilitas');
        $fasilitas = $this->input->post('fasilitas');

        $data = array(
            'idfasilitas'          => $idfasilitas,
            'fasilitas'           => $fasilitas
        );


        $this->db->insert('fasilitas', $data);
        redirect('daftar/datamaster');
    }

    public function editjenisbantuan($idjenis)
    {
        $data['jenis'] = $this->db->get_where('jenisbansos', ['jenisbantuan' => $idjenis])->row_array();

        $idjenis = $this->input->post('idjenis');
        $fasilitas = $this->input->post('kemiskinan');

        $data = array(
            'idjenis'          => $idjenis,
            'fasilitas'           => $fasilitas
        );


        $this->db->where(array(
            'idjenis' => $idjenis
        ));
        $this->db->update('jenisbantuan', $data);
    }

    public function tambahjenis()
    {

        $idjenis = $this->input->post('idjenis');
        $jenisbantuan = $this->input->post('jenisbantuan');

        $this->form_validation->set_rules('idjenis', 'idjenis', 'required|trim');
        if ($this->form_validation->run() == false) {
            echo 'salah';
        } else {
            $data = array(
                'idjenis'          => $idjenis,
                'jenisbantuan'           => $jenisbantuan
            );
            $this->db->insert('jenisbantuan', $data);
            redirect('daftar/datamaster');
        }
    }

    public function editsumberdana($idsumber)
    {
        $data['sumber'] = $this->db->get_where('sumberdana', ['idsumber' => $idsumber])->row_array();

        $idsumber = $this->input->post('idsumber');
        $dana = $this->input->post('dana');

        $data = array(
            'idsumber'          => $idsumber,
            'dana'           => $dana
        );


        $this->db->where(array(
            'idsumber' => $idsumber
        ));
        $this->db->update('sumberdana', $data);
    }

    public function tambahsumber()
    {

        $idsumber = $this->input->post('idsumber');
        $dana = $this->input->post('dana');

        $data = array(
            'idsumber'          => $idsumber,
            'dana'           => $dana
        );

        $this->db->insert('sumberdana', $data);
        redirect('daftar/datamaster');
    }
}
