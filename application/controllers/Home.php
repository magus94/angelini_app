<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()){
            redirect('/login');
        }

        $this->load->model('Corpo_tecnico_model', 'corpo_tecnico');
        $this->load->model('Noticia_model', 'noticia');
        $this->load->model('Servicos_model', 'servicos');
        $this->load->model('Videos_model', 'videos');
        $this->load->model('Feedback_model', 'feedback');

    }

    public function index(){

        $data['qtde_noticias'] = $this->noticia->qtdeNoticias();
        $data['qtde_membros'] = $this->corpo_tecnico->qtdeMembros();
        $data['qtde_servicos'] = $this->servicos->qtdeServicos();
        $data['qtde_videos'] = $this->videos->qtdeVideos();


        $this->load->view('parts/html_header', $data);
        $this->load->view('parts/menu');
        $this->load->view('index');
        $this->load->view('parts/html_footer');
    }

    public function meu_perfil(){

        $data['user'] = $this->ion_auth->user()->row();
        $data['js'][] = 'jquery.validate.js';

        $this->load->view('parts/html_header', $data);
        $this->load->view('parts/menu');
        $this->load->view('meu_perfil');
        $this->load->view('parts/html_footer');

    }

    public function salvar_perfil(){
        $id = $this->input->post('id');

        $data['first_name'] = $this->input->post('first_name');
        $data['last_name'] = $this->input->post('last_name');

        if ($this->input->post('password') != ''){
            $data['password'] = $this->input->post('password');
        }

        if($this->ion_auth->update($id, $data)){
            _alert('success', 'Perfil atualizado com sucesso!');
        }else{
            _alert('danger', $this->ion_auth->erros());
        }

        redirect('home/meu_perfil');



    }

}