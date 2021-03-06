<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Desa extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->library('pagination');
        $this->load->helper('url');
        //load the department_model
        $this->load->model('M_Bansos');
    }

    public function index()
    {
      
        $data['inputkab']='desa';
        $data['tittle'] = "Data Bansos";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $kabb = $data['user']['kabupaten'];
        $id_user       = $data['user']['id'];

        $today      = date('Y-m-d', time());
        $this->load->model('m_pantauan');
        $data['status'] = $this->db->get('statusbansos')->result_array();
        $data['agama'] = $this->db->get('agamab')->result_array();
        // $data['agama'] = $this->db->get('agamab')->result_array();
        $data['miskin'] = $this->db->get('kemiski')->result_array();
        $data['bansos'] = $this->db->get('bansos')->result_array();
        $data['fasilitas'] = $this->db->get('fasilitas')->result_array();
        $data['jenisbantuan'] = $this->db->get('jenisbantuan')->result_array();
        $data['sumberdana'] = $this->db->get('sumberdana')->result_array();




        $this->form_validation->set_rules('nama', 'nama', 'required|trim', array('required' => 'Harap isi kolom'));
        $this->form_validation->set_rules('nik', 'nik', 'required|trim|is_unique[databansos.nik]');
        $this->form_validation->set_message('required', '{field} tidak boleh kosong');
        $this->form_validation->set_message('is_unique', '{field} sudah digunakan');

        $this->form_validation->set_rules('nama', 'nama', 'required|trim|strtolower', array('required' => 'Harap isi kolom'));
        $this->form_validation->set_rules('nik', 'nik', 'required|trim|is_unique[databansos.nik]|strtolower');
        $this->form_validation->set_message('required', '{field} tidak boleh kosong');
        $this->form_validation->set_message('is_unique', '{field} sudah digunakan');

        // $this->form_validation->set_rules('nik', 'nik', 'required|trim|', array('required' => 'Harap isi kolom'));
        $this->form_validation->set_rules('kk', 'KK', 'required|trim|strtolower');
        $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required|trim|strtolower');
        $this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir', 'required|trim|strtolower');
        $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required|trim|strtolower');
        // $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|strtolower');
        $this->form_validation->set_rules('rt', 'RT', 'required|trim|strtolower');
        $this->form_validation->set_rules('rw', 'RW', 'required|trim|strtolower');
        $this->form_validation->set_rules('jl', 'Jalan', 'required|trim|strtolower');
        $this->form_validation->set_rules('desa', 'Desa', 'required|trim|strtolower');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim|strtolower');
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required|trim|strtolower');
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim|strtolower');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('kecamatan/input', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $nik = $this->input->post('nik');
            $kk = $this->input->post('kk');
            $tempatlahir = $this->input->post('tempatlahir');
            $tanggallahir = $this->input->post('tanggallahir');
            $jeniskelamin = $this->input->post('jeniskelamin');
            $agama = $this->input->post('agama');
            $alamat = $this->input->post('alamat');
            $jl = $this->input->post('jl');
            $rt = $this->input->post('rt');
            $rw     = $this->input->post('rw');
            $desa = $this->input->post('desa');
            $kecamatan = $this->input->post('kecamatan');
            $kabupaten = $this->input->post('kabupaten');
            $telp = $this->input->post('telp');
            $status = $this->input->post('status');
            $kemiskinan = $this->input->post('kemiskinan');
            $bansos = $this->input->post('bansos');
            $fasilitas = $this->input->post('fasilitas');
            $sumber = $this->input->post('sumber');
            $jenisbantuan = $this->input->post('jenisbantuan');
            $nomiskin = $this->input->post('nomiskin');
            $bansosmulai = $this->input->post('bansosmulai');
            $nofasilitas = $this->input->post('nofasilitas');
            $id_user        = $data['user']['id'];

            $data = array(
                'nama'          => $nama,
                'nik'           => (int) $nik,
                'kk'            => (int) $kk,
                'tempatlahir'   => $tempatlahir,
                'tanggallahir'  => $tanggallahir,
                'jeniskelamin'  => $jeniskelamin,
                'agama'         => $agama,
                'alamat'        => $alamat,
                'jl'            => $jl,
                'rt'            => $rt,
                'rw'            => $rw,
                'desa'          => $desa,
                'kecamatan'     => $kecamatan,
                'kabupaten'     => $kabupaten,
                'telp'          => (int) $telp,
                'status'        => $status,
                'kemiskinan'    => $kemiskinan,
                'bansos'        => $bansos,
                'fasilitas'     => $fasilitas,
                'sumber'        => $sumber,
                'jenisbantuan'  => $jenisbantuan,
                'nomiskin'        => $nomiskin,
                'bansosmulai'   => $bansosmulai,
                'nofasilitas'        => $nofasilitas,
                'verif_desa'     => 1
                // 'd_createdk'    => date('Y-m-d')

                // 'd_createdk'    => date('Y-m-d')
            );

            $this->db->insert('databansos', $data);
            // var_dump($this->db->insert('databansos', $data));
       

            redirect('desa/index');
        }
    }



    public function tampil()
    {
        $data['tittle'] = "Laporan";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('m_laporan');
        $desa      = $data['user']['desa'];

        $data['userK'] = $this->m_laporan->tampil_user();
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
        $limit_page = 10;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total = $this->M_Bansos->get_total_desa();
        $data['totaldesa'] = $this->M_Bansos->get_total_desa($desa);
        // var_dump($data['totaldesa']);
        // var_dump($totaldesa);
        if ($total > 0) {
            // get current page records
            $data['results'] = $this->M_Bansos->get_current_page($limit_page, $page * $limit_page);

            $config['base_url'] = base_url() . 'desa/tampil';
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
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        // $this->load->view('bansos/tampil', $data);
        $this->load->view('desa/tampil', $data);
        $this->load->view('templates/footer');
        // }
    }

    public function tampildesa($desa)
    {
        $data['tittle'] = "Laporan";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('m_laporan');
        $desa      = $data['user']['desa'];

        $data['userK'] = $this->m_laporan->tampil_user();
        ////////////////////////////////////////
        //set params
        $params = array();
        //set records per page
        $limit_page = 10;
        $page = ($this->uri->segment(4)) ? ($this->uri->segment(4) - 1) : 0;
        $total = $this->M_Bansos->get_total();

        if ($total > 0) {
            // get current page records
            $data['results'] = $this->M_Bansos->get_current_kecdes($limit_page, $page * $limit_page, $desa);

            $config['base_url'] = base_url() . 'laporan/perpage';
            $config['total_rows'] = $total;
            $config['per_page'] = $limit_page;
            $config['uri_segment'] = 3;

            //paging configuration
            $config['num_links'] = 2;
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
            var_dump($data['results']);
        }

        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        // // $this->load->view('bansos/tampil', $data);
        // $this->load->view('testingdesa', $data);
        // $this->load->view('templates/footer');
    }

    public function validasi($iddatabansos)
    {

        $data['databansos'] = $this->db->get_where('databansos', ['iddatabansos' => $iddatabansos])->row_array();

        $verif       = $data['databansos']['verif_kecamatan'];
        if ($verif == 1) {
            $data['tittle'] = "Validasi Kecamatan";
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['respon'] = "Data Telah tervalidasi";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('desa/respon', $data);

            $this->load->view('templates/footer');
        } else {
            $data['respon'] = "Data Berhasil tervalidasi";

            $this->db->where('iddatabansos', $iddatabansos);
            $this->db->update('databansos', array('verif_kecamatan'    => 1));
        }
    }

    public function tervalidasi()
    {
        $data['tittle'] = "Laporan";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('m_laporan');


        $data['userK'] = $this->m_laporan->tampil_user();
        ////////////////////////////////////////
        //set params
        $params = array();
        //set records per page
        $limit_page = 10;
        $page = ($this->uri->segment(4)) ? ($this->uri->segment(4) - 1) : 0;
        $total = $this->M_Bansos->get_total();
        $desa      = $data['user']['desa'];
        if ($total > 0) {
            // get current page records
            $data['results'] = $this->M_Bansos->tervalidasi($limit_page, $page * $limit_page, $desa);

            $config['base_url'] = base_url() . 'laporan/perpage';
            $config['total_rows'] = $total;
            $config['per_page'] = $limit_page;
            $config['uri_segment'] = 3;

            //paging configuration
            $config['num_links'] = 2;
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
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        // $this->load->view('bansos/tampil', $data);
        $this->load->view('desa/tampil', $data);
        $this->load->view('templates/footer');
    }


    public function belumtervalidasi()
    {
        $data['tittle'] = "Laporan";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('m_laporan');


        $data['userK'] = $this->m_laporan->tampil_user();
        ////////////////////////////////////////
        //set params
        $params = array();
        //set records per page
        $limit_page = 10;
        $page = ($this->uri->segment(4)) ? ($this->uri->segment(4) - 1) : 0;
        $total = $this->M_Bansos->get_total();
        $desa      = $data['user']['desa'];
        if ($total > 0) {
            // get current page records
            $data['results'] = $this->M_Bansos->belumtervalidasi($limit_page, $page * $limit_page, $desa);

            $config['base_url'] = base_url() . 'laporan/perpage';
            $config['total_rows'] = $total;
            $config['per_page'] = $limit_page;
            $config['uri_segment'] = 3;

            //paging configuration
            $config['num_links'] = 2;
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
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        // $this->load->view('bansos/tampil', $data);
        $this->load->view('desa/tampil', $data);
        $this->load->view('templates/footer');
    }



    public function edit($iddatabansos)
    {
        $data['tittle'] = "Data Bansos";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $desa = ['user']['desa'];
        // $desain =  $data['user']['desa'];
        // var_dump ($desain);
        $data['tittle'] = "Detail Penerima Bantuan Sosial";
        $data['databansos'] = $this->db->get_where('databansos', ['iddatabansos' => $iddatabansos])->row_array();

        $verif       = $data['databansos']['verif_kecamatan'];
        if ($verif == 1) {
            $data['tittle'] = "Laporan";
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['respon'] = "Data telah tervalidasi tidak dapat mengubah data";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('desa/respon', $data);

            $this->load->view('templates/footer');
        } else {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['status'] = $this->db->get('statusbansos')->result_array();
            $data['agama'] = $this->db->get('agamab')->result_array();
            $data['miskin'] = $this->db->get('kemiski')->result_array();
            $data['bansos'] = $this->db->get('bansos')->result_array();
            $data['fasilitas'] = $this->db->get('fasilitas')->result_array();
            $data['jenisbantuan'] = $this->db->get('jenisbantuan')->result_array();
            $data['sumberdana'] = $this->db->get('sumberdana')->result_array();

            $data['agamaval'] = $this->M_Bansos->joinagama($iddatabansos);
            $data['statusval'] = $this->M_Bansos->joinstatus($iddatabansos);
            $data['miskinval'] = $this->M_Bansos->joinmiskin($iddatabansos);
            $data['bansosval'] = $this->M_Bansos->joinbansos($iddatabansos);
            $data['fasilitasval'] = $this->M_Bansos->joinfasilitas($iddatabansos);
            $data['sumberval'] = $this->M_Bansos->joinsumber($iddatabansos);
            $data['jenisval'] = $this->M_Bansos->joinjenisbantuan($iddatabansos);



            $data['databansos'] = $this->db->get_where('databansos', ['iddatabansos' => $iddatabansos])->row_array();

            $this->form_validation->set_rules('nama', 'Full Name', 'required|trim');
            // $this->form_validation->set_rules('nik', 'Full Name', 'required|trim|is_unique[databansos.nik]');
            // $this->form_validation->set_rules('jenisbantuan', "is", 'required|in_list[' . implode(array_keys($data["jenisbantuan"]), 'jenisbantuan') . ']');

            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('bansos/editbansos', $data);
                $this->load->view('templates/footer');
                var_dump('tidak input');
            } else {
                $nama = $this->input->post('nama');
                $nik = $this->input->post('nik');
                $kk = $this->input->post('kk');
                $tempatlahir = $this->input->post('tempatlahir');
                $tanggallahir = $this->input->post('tanggallahir');
                $jeniskelamin = $this->input->post('jeniskelamin');
                $agama = $this->input->post('agama');
                $alamat = $this->input->post('alamat');
                $jl = $this->input->post('jl');
                $rt = $this->input->post('rt');
                $rw     = $this->input->post('rw');
                $desa = $this->input->post('desa');
                $kecamatan = $this->input->post('kecamatan');
                $kabupaten = $this->input->post('kabupaten');
                $telp = $this->input->post('telp');
                $status = $this->input->post('status');
                $kemiskinan = $this->input->post('kemiskinan');
                $bansos = $this->input->post('bansos');
                $fasilitas = $this->input->post('fasilitas');
                $sumber = $this->input->post('sumber');
                $jenisbantuan = $this->input->post('jenisbantuan');
                $nomiskin = $this->input->post('nomiskin');
                $bansosmulai = $this->input->post('bansosmulai');
                $nofasilitas = $this->input->post('nofasilitas');
                $id_user        = $data['user']['id'];
    
                $data = array(
                    'nama'          => $nama,
                    'nik'           => (int) $nik,
                    'kk'            => (int) $kk,
                    'tempatlahir'   => $tempatlahir,
                    'tanggallahir'  => $tanggallahir,
                    'jeniskelamin'  => $jeniskelamin,
                    'agama'         => $agama,
                    'alamat'        => $alamat,
                    'jl'            => $jl,
                    'rt'            => $rt,
                    'rw'            => $rw,
                    'desa'          => $desa,
                    'kecamatan'     => $kecamatan,
                    'kabupaten'     => $kabupaten,
                    'telp'          => (int) $telp,
                    'status'        => $status,
                    'kemiskinan'    => $kemiskinan,
                    'bansos'        => $bansos,
                    'fasilitas'     => $fasilitas,
                    'sumber'        => $sumber,
                    'jenisbantuan'  => $jenisbantuan,
                    'nomiskin'        => $nomiskin,
                    'bansosmulai'   => $bansosmulai,
                    'nofasilitas'       => $nofasilitas
    
                );

                $where = array(
                    'iddatabansos' => $iddatabansos
                );
                // $this->db->set('databansos', $data);
                // $this->db->where('databansos',$where);
                // $this->db->update('databansos');

                $this->db->where($where);
                $this->db->update('databansos', $data);
                
            }
        }
    }

    function hapus($iddatabansos)
    {

        $data['databansos'] = $this->db->get_where('databansos', ['iddatabansos' => $iddatabansos])->row_array();
        $data['tittle'] = "Hapus Data";
        $verif       = $data['databansos']['verif_kecamatan'];
        if ($verif == 1) {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['respon'] = "Data telah tervalidasi tidak dapat menghapus data";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('desa/respon', $data);

            $this->load->view('templates/footer');
        } else {
            $data['databansos'] = $this->db->delete('databansos', ['iddatabansos' => $iddatabansos]);
            $data['tittle'] = "Hapus Data";

            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['respon'] = "Data berhasil dihapus";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('desa/respon', $data);

            $this->load->view('templates/footer');
        }
    }



    public function detail($iddatabansos)
    {
        $data['tittle'] = "Detail Penerima Bantuan Sosial";

        $data['agamaval'] = $this->M_Bansos->joinagama($iddatabansos);
        $data['statusval'] = $this->M_Bansos->joinstatus($iddatabansos);
        $data['miskinval'] = $this->M_Bansos->joinmiskin($iddatabansos);
        $data['bansosval'] = $this->M_Bansos->joinbansos($iddatabansos);
        $data['fasilitasval'] = $this->M_Bansos->joinfasilitas($iddatabansos);
        $data['sumberval'] = $this->M_Bansos->joinsumber($iddatabansos);
        $data['jenisval'] = $this->M_Bansos->joinjenisbantuan($iddatabansos);

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['databansos'] = $this->db->get_where('databansos', ['iddatabansos' => $iddatabansos])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bansos/tampil', $data);
        $this->load->view('templates/footer');

        $data['dis'] = $this->M_Bansos->distinctdata();
    }


    function FunctionName()
    {
        $data['agamaval'] = $this->M_Bansos->distinctdata();
    }
    function testing()
    {
        $data['agamaval'] = $this->M_Bansos->distinctdata();
        var_dump($data['agamaval']);
        $this->load->view('bansos/testing', $data);
    }

    function testingkec($kecamatan)
    {
        $data['kec'] = $this->M_Bansos->distinctdata($kecamatan);
        var_dump($data['kec']);
        $this->load->view('bansos/testingkec', $data);
    }

    function testingkab()
    {
        $data['kab'] = $this->M_Bansos->distinctkabupaten();
        $this->load->view('bansos/testing', $data);
    }

  
    
    public function export()
    {
        $data['tittle'] = "Data Bansos";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $kecamatan = $data['user']['kecamatan'];
        $desa = $data['user']['desa'];

        $this->load->view('templates/footer');

        // $data['databansos'] = $this->db->get('databansos')->result_array();
        // $data['databansos'] = $this->db->get_where('databansos', array('kecamatan' => $kecamatan))->result_array();
        $data['databansos'] = $this->db->get_where('databansos', array('desa' => $desa))->result_array();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("Data Bansos");
        $object->getProperties()->setLastModifiedBy("Data Bansos");
        $object->getProperties()->setTitle("Daftar Bansos");
        $object->setActiveSheetIndex("0");
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama');
        $object->getActiveSheet()->setCellValue('C1', 'No NIK');
        $object->getActiveSheet()->setCellValue('D1', 'No KK');
        $object->getActiveSheet()->setCellValue('E1', 'Tempat Lahir');
        $object->getActiveSheet()->setCellValue('F1', 'Tanggal Lahir');
        $object->getActiveSheet()->setCellValue('G1', 'Jenis Kelamin');
        $object->getActiveSheet()->setCellValue('H1', 'Agama');
        $object->getActiveSheet()->setCellValue('I1', 'Alamat');
        $object->getActiveSheet()->setCellValue('J1', 'Jalan');
        $object->getActiveSheet()->setCellValue('K1', 'RT');
        $object->getActiveSheet()->setCellValue('L1', 'RW');
        $object->getActiveSheet()->setCellValue('M1', 'Desa');
        $object->getActiveSheet()->setCellValue('N1', 'Kecamatan');
        $object->getActiveSheet()->setCellValue('O1', 'Kabupaten');
        $object->getActiveSheet()->setCellValue('P1', 'No Telepon');

        $object->getActiveSheet()->setCellValue('Q1', 'Status Keluarga');
        $object->getActiveSheet()->setCellValue('R1', 'Data Kemiskinan
            ');
        $object->getActiveSheet()->setCellValue('S1', 'Bantuan Sosial yang diterima');
        $object->getActiveSheet()->setCellValue('T1', 'Fasilitas Kesehatan
            ');
        $object->getActiveSheet()->setCellValue('U1', 'No BPJS');
        $object->getActiveSheet()->setCellValue('V1', 'Sumber Dana');
        $object->getActiveSheet()->setCellValue('W1', 'Jenis Bantuan');
        $baris = 2;
        $no = 1;

        foreach ($data['databansos'] as $a) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $a['nama']);
            $object->getActiveSheet()->setCellValue('C' . $baris, $a['nik']);
            $object->getActiveSheet()->setCellValue('D' . $baris, $a['kk']);
            $object->getActiveSheet()->setCellValue('E' . $baris, $a['tempatlahir']);
            $object->getActiveSheet()->setCellValue('F' . $baris, $a['tanggallahir']);
            $object->getActiveSheet()->setCellValue('G' . $baris, $a['jeniskelamin']);
            $object->getActiveSheet()->setCellValue('H' . $baris, $a['agama']);
            $object->getActiveSheet()->setCellValue('I' . $baris, $a['alamat']);
            $object->getActiveSheet()->setCellValue('J' . $baris, $a['jl']);
            $object->getActiveSheet()->setCellValue('K' . $baris, $a['rt']);
            $object->getActiveSheet()->setCellValue('L' . $baris, $a['rw']);
            $object->getActiveSheet()->setCellValue('M' . $baris, $a['desa']);
            $object->getActiveSheet()->setCellValue('N' . $baris, $a['kecamatan']);
            $object->getActiveSheet()->setCellValue('O' . $baris, $a['kabupaten']);
            $object->getActiveSheet()->setCellValue('P' . $baris, $a['telp']);
            $object->getActiveSheet()->setCellValue('Q' . $baris, $a['status']);
            $object->getActiveSheet()->setCellValue('R' . $baris, $a['kemiskinan']);
            $object->getActiveSheet()->setCellValue('S' . $baris, $a['nomiskin']);
            $object->getActiveSheet()->setCellValue('T' . $baris, $a['bansos']);
            $object->getActiveSheet()->setCellValue('U' . $baris, $a['bansosmulai']);
            $object->getActiveSheet()->setCellValue('V' . $baris, $a['fasilitas']);
            $object->getActiveSheet()->setCellValue('W' . $baris, $a['nofasilitas']);
            $object->getActiveSheet()->setCellValue('X' . $baris, $a['sumber']);

            $baris++;
        }

        $filename = "Data_Bansos" . '.xlsx';
        $object->getActiveSheet()->setTitle("Data Bansos");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attechment; filename= "' . $filename . '"');
        header('Chace-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

}

