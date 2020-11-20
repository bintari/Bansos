<?php
class model_bansos extends CI_Model
{
    function tampillist($limit, $start){
        $query = $this->db->get('databansos', $limit, $start);
        return $query;
    }
}