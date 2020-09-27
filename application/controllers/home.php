<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->model("noticias_model");
        $this->load->helper(array("date_helper", "typography"));
        $noticias = $this->noticias_model->buscaTodosPorTabela("noticias");
        $caminhoCss = "index.css";

        $dados = array("caminhoCss" => $caminhoCss, "noticias" => $noticias);
        $this->load->viewTemplate("index.php", $dados);
    }
}