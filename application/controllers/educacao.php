<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Educacao extends CI_Controller
{
    public function index()
    {
        $this->load->model('noticias_model');
        $this->load->helper(array("date_helper", "typography"));
        $noticias = $this->noticias_model->buscaPorId("secretarias", 1);
        $cont=0;
        $diretorio = "./img/secretarias/{$noticias['pasta']}";
        $ponteiro  = opendir($diretorio);
        while ($nome_itens = readdir($ponteiro)) {
            if (!(is_dir($nome_itens))){
                $cont++;
            }
        }
        $dados = array(
            "caminhoCss" => "secretarias/secretarias.css",
            "noticia" => $noticias,
            "qtdArquivos" => $cont,
            "diretorio" => $diretorio
        );
        $this->load->viewTemplate("secretarias/educacao", $dados);
    }
}