<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sistempakar extends CI_Controller
{
    public function index()
    {

        // $sqlp = "select * from diagnosa where mulai='Y'";
        // $rs = mysql_query($sqlp);

        // $data = mysql_fetch_array($rs);    
        $mulai = $this->db->select('*')->from('diagnosa')->where('mulai', 'Y');
        // $this->db->get('diagnosa');
        $data['return'] = $mulai->results_arrays();


        // $mulai = $this->db->select('*')
        // ->where('mulai', 'Y')
        // ->get('diagnosa');
        // $data['pertanyaan'] = $mulai->result_array();
        $this->load->view('pantauan/sistempakar', $data);
    }
}
