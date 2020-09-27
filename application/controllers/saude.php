<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Saude extends CI_Controller
{
    public function index()
    {
        $this->load->model('noticias_model');
        $this->load->helper(array("date_helper","typography"));
        $noticias = $this->noticias_model->buscaTodosPorTabela("educacao");

        $dados = array(
            "caminhoCss" => "noticias/index.css",
            "noticias" => $noticias
        );
        $this->load->viewTemplate("noticias/noticia", $dados);
    }
}