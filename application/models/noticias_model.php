<?php
class Noticias_model extends CI_Model
{
    public function busca($id)
    {
        $this->db->where('id', $id);
        return $this->db->get("noticias")->row_array();
    }

    public function buscaTodos()
    {
        $this->db->order_by('data', 'DESC');
        return $this->db->get("noticias")->result_array();
    }
}
