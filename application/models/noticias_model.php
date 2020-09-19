<?php
class Noticias_model extends CI_Model
{
    public function busca($id)
    {
        return $this->db->get_where("noticias", array(
           "id" => $id
        ))->row_array();
    }

    public function buscaTodos()
    {
        return $this->db->get("noticias")->result_array();
    }
}
