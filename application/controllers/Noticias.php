<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()){
            redirect('/login');
        }

        $this->load->model('Noticia_model', 'noticias');

    }

    public function index(){

        $data['noticias'] = $this->noticias->getNoticias();

        $this->load->view('parts/html_header');
        $this->load->view('parts/menu');
        $this->load->view('noticias/index', $data);
        $this->load->view('parts/html_footer');
    }

    public function cadastrar(){

        $this->load->view('parts/html_header');
        $this->load->view('parts/menu');
        $this->load->view('noticias/cadastrar');
        $this->load->view('parts/html_footer');
    }


    public function salvar(){
        if($this->noticias->salvar()){
            _alert('success', 'Noticia cadastrada com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel realizar o cadastro da Noticia!');
        }

        redirect('Noticias');
    }

    public function editar($id){

        $data['noticia'] = $this->noticias->getNoticia($id);

        $this->load->view('parts/html_header', $data);
        $this->load->view('parts/menu');
        $this->load->view('noticias/editar');
        $this->load->view('parts/html_footer');
    }

    public function apagar(){
        if($this->noticias->apagar()){
            _alert('success', 'Noticia apagada com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel apagar a Noticia!');
        }
    }

    public function atualizar(){
        if($this->noticias->atualizar()){
            _alert('success', 'Noticia atualizada com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel atualizar a Noticia!');
        }

        redirect('Noticias');
    }
}