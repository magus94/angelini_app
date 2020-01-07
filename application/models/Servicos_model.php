<?php


class Servicos_model extends CI_Model {

    public function getServicos(){
        return $this->db->get('servicos')->result();
    }

    public function getServico($id){
        $this->db->where('idServicos', $id);
        return $this->db->get('servicos')->result();
    }

    public function salvar() {
        $data = $this->input->post();
        return $this->db->insert('servicos', $data);

    }

    public function atualizar() {
        $data = $this->input->post();

        $this->db->where('idServicos', $data['idServicos']);
        return $this->db->update('servicos', $data);
    }

    public function apagar(){
        $id = $this->input->post('id');

        $this->db->where('idServicos', $id);
        return $this->db->delete('servicos');
    }

    public function qtdeServicos() {
        return $this->db->count_all('servicos');
    }
}