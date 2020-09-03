<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        $caminhoCss = array("path" => "index.css");
        $dados = array("caminhoCss" => $caminhoCss);
        $this->load->viewTemplate("index.php", $dados );
    }
}