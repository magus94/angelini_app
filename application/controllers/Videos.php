<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()){
            redirect('/login');
        }

        $this->load->model('Videos_model', 'videos');

    }

    public function index(){

        $data['videos'] = $this->videos->getVideos();

        $this->load->view('parts/html_header');
        $this->load->view('parts/menu');
        $this->load->view('videos/index', $data);
        $this->load->view('parts/html_footer');
    }

    public function cadastrar(){

        $this->load->view('parts/html_header');
        $this->load->view('parts/menu');
        $this->load->view('videos/cadastrar');
        $this->load->view('parts/html_footer');
    }

    public function salvar(){
        if($this->videos->salvar()){
            _alert('success', 'Video cadastrada com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel realizar o cadastro do Video!');
        }

        redirect('videos');
    }

    public function apagar(){
        if($this->videos->apagar()){
            _alert('success', 'Video apagado com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel apagar o Video!');
        }
    }
}