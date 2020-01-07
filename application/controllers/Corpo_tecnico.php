<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corpo_tecnico extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()){
            redirect('/login');
        }

        $this->load->model('Corpo_tecnico_model', 'corpo_tecnico');

    }

    public function index(){

        $data['corpo_tecnico'] = $this->corpo_tecnico->getCorpoTecnico();

        $this->load->view('parts/html_header');
        $this->load->view('parts/menu');
        $this->load->view('corpo_tecnico/index', $data);
        $this->load->view('parts/html_footer');
    }

    public function cadastrar(){

        $this->load->view('parts/html_header');
        $this->load->view('parts/menu');
        $this->load->view('corpo_tecnico/cadastrar');
        $this->load->view('parts/html_footer');
    }


    public function salvar(){
        if($this->corpo_tecnico->salvar()){
            _alert('success', 'Membro cadastrada com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel realizar o cadastro do membro! ('.$this->upload->display_errors().')');
        }

        redirect('corpo_tecnico');
    }

    public function editar($id){

        $data['membro'] = $this->corpo_tecnico->getMembro($id);

        $this->load->view('parts/html_header', $data);
        $this->load->view('parts/menu');
        $this->load->view('corpo_tecnico/editar');
        $this->load->view('parts/html_footer');
    }

    public function apagar(){
        if($this->noticias->apagar()){
            _alert('success', 'Membro apagado com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel apagar o Membro!');
        }
    }

    public function atualizar(){
        if($this->corpo_tecnico->atualizar()){
            _alert('success', 'Membro atualizado com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel atualizar o Membro!');
        }

        redirect('corpo_tecnico');
    }


}