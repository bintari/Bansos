<?php
class M_Bansos extends CI_Model
{
    function tampillist($limit, $start)
    {
        $query = $this->db->get('databansos', $limit, $start);
        return $query;
    }

    public function getstatus()
    {
        $query = $this->db->get('statusbansos');
        return $query;
    }

    public function getagama()
    {
        $query = $this->db->get('agamab');
        return $query;
    }

    public function getbansos()
    {
        $query = $this->db->get('bansos');
        return $query;
    }

    public function getfasilitas()
    {
        $query = $this->db->get('fasilitas');
        return $query;
    }

    public function getjenisbantuan()
    {
        $query = $this->db->get('jenisbantuan');
        return $query;
    }

    public function getsumberdana()
    {
        $query = $this->db->get('sumberdana');
        return $query;
    }



    function update_data($where, $data)
    {

        $this->db->where($where);

        $this->db->update('databansos', $data);
    }

    public function hapusdata($iddatabansos)
    {
        $this->db->delete('databansos', array('iddatabansos' => $iddatabansos));
    }

    public function joinagama($iddatabansos)
    {
        $this->db->select('*');
        $this->db->from('databansos');
        $this->db->where('iddatabansos',  $iddatabansos);
        $this->db->join('agamab', 'agamab.idagama = databansos.agama');
        return $this->db->get()->row_array();
    }

    public function joinstatus($iddatabansos)
    {
        $this->db->select('*');
        $this->db->from('databansos');
        $this->db->where('iddatabansos', $iddatabansos);
        $this->db->join('statusbansos', 'statusbansos.id = databansos.status');
        return $this->db->get()->row_array();
    }

    public function joinmiskin($iddatabansos)
    {
        $this->db->select('*');
        $this->db->from('databansos');
        $this->db->where('iddatabansos', $iddatabansos);
        $this->db->join('kemiski', 'kemiski.idkemiskinan = databansos.kemiskinan');
        return $this->db->get()->row_array();
    }

    public function joinbansos($iddatabansos)
    {
        $this->db->select('*');
        $this->db->from('databansos');
        $this->db->where('iddatabansos', $iddatabansos);
        $this->db->join('bansos', 'bansos.idbansos = databansos.bansos');
        return $this->db->get()->row_array();
    }

    public function joinfasilitas($iddatabansos)
    {
        $this->db->select('*');
        $this->db->from('databansos');
        $this->db->where('iddatabansos', $iddatabansos);
        $this->db->join('fasilitas', 'databansos.fasilitas = fasilitas.idfasilitas');
        return $this->db->get()->row_array();
    }

    public function joinsumber($iddatabansos)
    {
        $this->db->select('*');
        $this->db->from('databansos');
        $this->db->where('iddatabansos', $iddatabansos);
        $this->db->join('sumberdana', 'sumberdana.idsumber = databansos.sumber');
        return $this->db->get()->row_array();
    }

    public function joinjenisbantuan($iddatabansos)
    {
        $this->db->select('*');
        $this->db->from('databansos');
        $this->db->where('iddatabansos', $iddatabansos);
        $this->db->join('jenisbantuan', 'jenisbantuan.idjenis = databansos.jenisbantuan');
        return $this->db->get()->row_array();
    }

    public function joinvalidasikec($iddatabansos)
    {
        $this->db->select('*');
        $this->db->from('databansos');
        $this->db->where('iddatabansos', $iddatabansos);
        $this->db->join('validasi', 'validasi.id = databansos.verif_kecamatan');
        return $this->db->get()->row_array();
    }

    public function get_current_page($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('databansos', array('verif_desa' => 1));
        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }


    public function getuserkab($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('user', array('role_id' => 2));
        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }

    public function getuserkec($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('user', array('role_id' => 3));
        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }

    public function getuserdes($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('user', array('role_id' => 4));
        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }

    public function get_current_user($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get('user');
        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }

    public function get_current_kecdes($limit, $start, $desa)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('databansos', array('verif_kecamatan' => 1,'verif_desa' => 1, 'desa' => $desa));

        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }

    public function tampildikecamatan($limit, $start, $desa)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('databansos', array('verif_desa' => 1, 'desa' => $desa));

        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }
    public function belumtervalidasi($limit, $start, $desa)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('databansos', array('verif_desa' => 0, 'desa' => $desa));

        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }
    public function belumtervalidasikecamatan($limit, $start, $desa)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('databansos', array('verif_desa' => 1, 'verif_kecamatan =' => 0, 'desa' => $desa));

        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }
    public function tervalidasi($limit, $start, $desa)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('databansos', array('verif_desa' => 1, 'verif_kecamatan =' => 1, 'desa' => $desa));

        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }

    public function get_current_pagekab($limit, $start, $idkab)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('databansos', array('verif_kecamatan' => 1, 'kabupaten' => $idkab));
        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }
    public function get_current_pagekec($limit, $start, $idkec)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('databansos', array('verif_kecamatan' => 1, 'kecamatan' => $idkec));
        $rows = $query->result();

        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }

    public function get_total()
    {
        return $this->db->count_all('databansos');
    }


    public function total($idkab)
    {
        $this->db->count_all_results('databansos');  // Produces an integer, like 25
        $this->db->where('verif_kabupaten', 1);
        $this->db->where('kabupaten', $idkab);
        $this->db->from('databansos');
        return $this->db->count_all_results();
    }

    public function totalkec($idkec)
    {
        $this->db->count_all_results('databansos');  // Produces an integer, like 25
        $this->db->where('verif_kecamatan', 1);
        $this->db->where('kabupaten', $idkec);
        $this->db->from('databansos');
        return $this->db->count_all_results();
    }
    public function totalbelum($idkab)
    {
        $this->db->count_all_results('databansos');  // Produces an integer, like 25
        $this->db->where('verif_kabupaten', 0);
        $this->db->where('kabupaten', $idkab);
        $this->db->from('databansos');
        return $this->db->count_all_results();
    }
    public function totalbelumkec($idkec)
    {
        $this->db->count_all_results('databansos');  // Produces an integer, like 25
        $this->db->where('verif_kecamatan', 0);
        $this->db->where('kabupaten', $idkec);
        $this->db->from('databansos');
        return $this->db->count_all_results();
    }

    public function get_total_desa()
    {
        $this->db->count_all_results('databansos');  // Produces an integer, like 25
        $this->db->where('verif_desa', 1);
        $this->db->from('databansos');
        return $this->db->count_all_results();
    }
    public function totaluserkab()
    {
        $this->db->count_all_results('user');  // Produces an integer, like 25
        $this->db->where('rolw_id', 2);
        $this->db->from('user');
        return $this->db->count_all_results();
    }


    public function get_total_desa_belum()
    {
        $this->db->count_all_results('databansos');  // Produces an integer, like 25
        $this->db->where('verif_desa', 0);
        $this->db->from('databansos');
        return $this->db->count_all_results();
    }

    public function get_total_kecamatan()
    {
        $this->db->count_all_results('databansos');  // Produces an integer, like 25
        $this->db->where('verif_kecamatan', 1);
        $this->db->from('databansos');
        return $this->db->count_all_results();
    }

    public function get_total_kabupaten()
    {
        $this->db->count_all_results('databansos');  // Produces an integer, like 25
        $this->db->where('verif_kabupaten', 1);
        $this->db->from('databansos');
        return $this->db->count_all_results();
    }

    public function cariOrang()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT * from databansos where nama like '%$cari%' ");
        return $data->result();
    }
    public function carikab()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT * from user where kabupaten like '%$cari%' ");
        return $data->result();
    }

    function tampildesa()
    {
        $this->db->select('*');
        $this->db->from('databansos');
        $this->db->where('verif_desa', 1);
        return $this->db->get()->result_array();
    }

    public function validasi($iddatabansos)
    {

        $this->db->set('verif_kecamatan', 1);
        $this->db->where('iddatabansos', $iddatabansos);
        $this->db->update('databansos');
    }

    function distinctdata()
    {
        $this->db->distinct();
        $this->db->select('desa');
        $result_deals = $this->db->get('databansos');
        return $result_deals->result();
    }

    function distinctkecadmin($kecamatan)
    {
        $this->db->distinct();
        $this->db->select('desa');
        $result_deals = $this->db->get_where('databansos', array('verif_desa' => 1, 'kecamatan' => $kecamatan));
        return $result_deals->result();
    }
    function diskecdes($desa)
    {
        $this->db->distinct();
        $this->db->select('desa');
        $result_deals = $this->db->get_where('databansos', array('verif_desa' => 1, 'desa' => $desa));
        return $result_deals->result();
    }
    function distinctkecamatan($kecamatan)
    {
        $this->db->distinct();
        $this->db->select('desa');
        $result_deals = $this->db->get_where('databansos', array('verif_kecamatan' => 1, 'kecamatan' => $kecamatan));
        return $result_deals->result();
    }

    function distinctkabupaten($idkab)
    {
        $this->db->distinct();
        $this->db->select('kecamatan');
        $result_deals = $this->db->get_where('databansos', array('verif_kecamatan' => 1, 'kabupaten' => $idkab));
        return $result_deals->result();
    }

    function distinctkabkec($kecamatan)
    {
        $this->db->distinct();
        $this->db->select('kecamatan');
        $result_deals = $this->db->get_where('databansos', array('verif_kecamatan' => 1, 'kecamatan' => $kecamatan));
        return $result_deals->result();
    }
}
