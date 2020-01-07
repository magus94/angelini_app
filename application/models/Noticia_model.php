<?php


class Noticia_model extends CI_Model {

    public function getNoticias(){
        return $this->db->get('noticias')->result();
    }

    public function getNoticia($id){
        $this->db->where('idNoticia', $id);
        return $this->db->get('noticias')->result();
    }

    public function salvar() {

        $data = $this->input->post();
        $configuracao = array(
            'upload_path'   => './assets/images/noticias',
            'allowed_types' => 'gif|jpg|png|jpeg|svg',
            'max_size'      => '0'
        );

        $this->load->library('upload');
        $this->upload->initialize($configuracao);

        if ($this->upload->do_upload('imagem')){
            $data['imagem'] = $this->upload->file_name;
            $this->db->insert('noticias', $data);
            return TRUE;
        }else{
            return FALSE;
        }

    }

    public function atualizar() {
        $data = $this->input->post();

        $config['upload_path'] = '.assets/images/noticias';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
        $config['max_size'] = 0;
        $this->load->library('upload', $config);

        if($this->upload->do_upload('imagem')){
            $data['imagem'] = $this->upload->file_name;
        }

        $this->db->where('idNoticia', $data['idNoticia']);
        return $this->db->update('noticias', $data);
    }

    public function apagar(){
        $id = $this->input->post('id');

        $this->db->where('idNoticia', $id);
        return $this->db->delete('noticias');
    }

    public function qtdeNoticias() {
        return $this->db->count_all('noticias');
    }
}