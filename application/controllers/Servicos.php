<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()){
            redirect('/login');
        }

        $this->load->model('Servicos_model', 'servicos');

    }

    public function index(){

        $data['servicos'] = $this->servicos->getServicos();

        $this->load->view('parts/html_header');
        $this->load->view('parts/menu');
        $this->load->view('servicos/index', $data);
        $this->load->view('parts/html_footer');
    }

    public function cadastrar(){

        $this->load->view('parts/html_header');
        $this->load->view('parts/menu');
        $this->load->view('servicos/cadastrar');
        $this->load->view('parts/html_footer');
    }


    public function salvar(){
        if($this->servicos->salvar()){
            _alert('success', 'Serviço cadastrada com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel realizar o cadastro do Serviço!');
        }

        redirect('servicos');
    }

    public function editar($id){

        $data['servico'] = $this->servicos->getServico($id);

        $this->load->view('parts/html_header', $data);
        $this->load->view('parts/menu');
        $this->load->view('servicos/editar');
        $this->load->view('parts/html_footer');
    }

    public function apagar(){
        if($this->servicos->apagar()){
            _alert('success', 'Serviço apagado com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel apagar o Serviço!');
        }
    }

    public function atualizar(){
        if($this->servicos->atualizar()){
            _alert('success', 'Serviços atualizado com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel atualizar o Serviços!');
        }

        redirect('servicos');
    }
}