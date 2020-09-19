<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->model("noticias_model");
        $this->load->helper("date_helper");
        $noticias = $this->noticias_model->buscaTodos();
        $caminhoCss = "index.css";

        $dados = array("caminhoCss" => $caminhoCss, "noticias" => $noticias);
        $this->load->viewTemplate("index.php", $dados);
    }
}