<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller
{
    public function index()
    {
        $this->load->model('noticias_model');
        $this->load->helper(array("date_helper","typography"));
        $noticias = $this->noticias_model->buscaTodos();
        $caminhoCss = "noticias/index.css";

        $dados = array("caminhoCss" => $caminhoCss, "noticias" => $noticias);
        $this->load->viewTemplate("noticias/index", $dados);
    }

    public function educacao()
    {
        $this->load->model('noticias_model');
        $this->load->helper(array("date_helper","typography"));
        $noticias = $this->noticias_model->buscaTodosPorTabela("educacao");

        $dados = array("caminhoCss" => "", "noticias" => $noticias);
        $this->load->viewTemplate("noticias/educacao", $dados);
    }
    public function noticia($id)
    {
        $this->load->model('noticias_model');
        $noticia = $this->noticias_model->busca($id);
        $this->load->helper(array("typography"));
        $cont=0;
        $diretorio = "./img/noticias/{$noticia['pasta']}";
        $ponteiro  = opendir($diretorio);
        while ($nome_itens = readdir($ponteiro)) {
            if (!(is_dir($nome_itens))){
                $cont++;
            }
        }
        $dados = array(
            "noticia" => $noticia,
            "caminhoCss" => "noticias/noticia.css",
            "qtdArquivos" => $cont,
            "diretorio" => $diretorio
        );
        $this->load->viewTemplate("noticias/noticia", $dados );
    }
}