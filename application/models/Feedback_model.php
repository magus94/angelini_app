<?php


class Feedback_model extends CI_Model {

    public function getFeedbacks(){
        return $this->db->get('feedback_clientes')->result();
    }

    public function salvar() {
        $data = $this->input->post();

        return $this->db->insert('feedback_clientes', $data);
    }

    public function apagar(){
        $id = $this->input->post('id');

        $this->db->where('idFeedback', $id);
        return $this->db->delete('feedback_clientes');
    }

}