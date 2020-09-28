<?php


class Sobre extends CI_Controller
{
    public function index()
    {
        $caminhoCss = "sobre.css";
        $this->load->helper("typography");
        $dados = array("caminhoCss" => $caminhoCss);
        $this->load->viewTemplate("sobre.php", $dados);
    }
}