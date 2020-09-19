<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function noticias($id)
    {
        $this->load->model('noticias_model');
        $noticia = $this->noticias_model->busca($id);
        $this->load->helper(array("typography"));
        $cont=0;
        $diretorio = "./img/noticias/{$noticia['caminho']}";
        $ponteiro  = opendir($diretorio);
        while ($nome_itens = readdir($ponteiro)) {
            if (!(is_dir($nome_itens))){
                $cont++;
            }
        }
        $dados = array(
            "noticia" => $noticia,
            "caminhoCss" => array(
                "path" => "noticias.css"),
            "qtdArquivos" => $cont,
            "diretorio" => $diretorio
        );
        $this->load->viewTemplate("noticias/noticia", $dados );
    }
    public function index()
    {
        $this->load->model("noticias_model");
        $this->load->helper("date_helper");
        $noticias = $this->noticias_model->buscaTodos();
        $caminhoCss = array("path" => "index.css");

        $dados = array("caminhoCss" => $caminhoCss, "noticias" => $noticias);
        $this->load->viewTemplate("index.php", $dados);
    }
}