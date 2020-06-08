<?php
class Pantaun extends CI_Controller
{
    public function index()
    {
        // # code...
        // $data =
        //     $this->db->get('checkbox')->result();
        $this->load->view('pantauan/pantaun');
    }

    public function insert()
    {
        if ($this->input->post('check_list[]') == true) {

            $check = $this->input->post('check_list[]');
            // foreach ($check as $warna) 
            $warna = implode(",", $check);

            $data = [
                'option' => $warna
            ];

            $this->db->insert('checkbox', $data);

            redirect('auth');
        }
    }
}
