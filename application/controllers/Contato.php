<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()){
            redirect('/login');
        }

        $this->load->model('Contato_model', 'contato');

    }

    public function index(){

        $data['agendamento'] = $this->contato->getContatos();

        $this->load->view('parts/html_header');
        $this->load->view('parts/menu');
        $this->load->view('contato/index', $data);
        $this->load->view('parts/html_footer');
    }

    public function cadastrar(){

        $this->load->view('parts/html_header');
        $this->load->view('parts/menu');
        $this->load->view('feedback/cadastrar');
        $this->load->view('parts/html_footer');
    }

    public function apagar(){
        if($this->contato->apagar()){
            _alert('success', 'Agendamento apagado com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel apagar o Agendamento!');
        }
    }


}