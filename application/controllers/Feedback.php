<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()){
            redirect('/login');
        }

        $this->load->model('Feedback_model', 'feedback');

    }

    public function index(){

        $data['feedback'] = $this->feedback->getFeedbacks();

        $this->load->view('parts/html_header');
        $this->load->view('parts/menu');
        $this->load->view('feedback/index', $data);
        $this->load->view('parts/html_footer');
    }

    public function cadastrar(){

        $this->load->view('parts/html_header');
        $this->load->view('parts/menu');
        $this->load->view('feedback/cadastrar');
        $this->load->view('parts/html_footer');
    }


    public function salvar(){
        if($this->feedback->salvar()){
            _alert('success', 'Feedback salvo com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel salvar o feedback!');
        }

        redirect('feedback');
    }

    public function apagar(){
        if($this->feedback->apagar()){
            _alert('success', 'Feedback apagada com sucesso!');
        }else{
            _alert('danger', 'Não foi possivel apagar a Feedback!');
        }
    }


}