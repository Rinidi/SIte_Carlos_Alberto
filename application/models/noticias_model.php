<?php
class Noticias_model extends CI_Model
{
    public function busca($id)
    {
        $this->db->where('id', $id);
        return $this->db->get("noticias")->row_array();
    }

    public function buscaTodosPorTabela($tabela = "noticias")
    {
        $this->db->order_by('data', 'DESC');
        return $this->db->get($tabela)->result_array();
    }
    public function buscaPorId($tabela, $id){
        $this->db->where('id', $id);
        return $this->db->get($tabela)->row_array();
    }

}
