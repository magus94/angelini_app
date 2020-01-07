<?php


class Api extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Corpo_tecnico_model', 'corpo_tecnico');
        $this->load->model('Noticia_model', 'noticia');
        $this->load->model('Servicos_model', 'servicos');
        $this->load->model('Videos_model', 'videos');
        $this->load->model('Feedback_model', 'feedback');

        header("Access-Control-Allow-Origin: *");
    }

    public function corpo_tecnico(){
        $corpo_tecnico = json_encode($this->corpo_tecnico->getCorpoTecnico());

        //echo $corpo_tecnico;


        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output($corpo_tecnico);
    }

    public function membro($id) {
        $membro = $this->corpo_tecnico->getMembro($id);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($membro));
    }

    public function noticias(){
        $noticias = json_encode($this->noticia->getNoticias());

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output($noticias);
    }

    public function noticia($id){
        $noticia = json_encode($this->noticia->getNoticia($id));

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output($noticia);
    }

    public function videos(){
        $videos = json_encode($this->videos->getUrlVideos());

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output($videos);
    }

    public function agendar_consulta(){
        $data = $this->input->post();

        if($this->db->insert('agendar_consultas', $data)){
            $response = 1;
        }else{
            $response = 0;
        }

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($response));
    }

    public function feedback(){
        $feedback = $this->feedback->getFeedbacks();

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($feedback));
    }

    public function servicos(){
        $servicos = $this->servicos->getServicos();

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($servicos));
    }
}