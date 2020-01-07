<?php


class Contato_model extends CI_Model {

    public function getContatos(){
        return $this->db->get('agendar_consultas')->result();
    }

    public function salvar() {
        $data = $this->input->post();

        return $this->db->insert('agendar_consultas', $data);
    }

    public function apagar(){
        $id = $this->input->post('id');

        $this->db->where('idAgendamento', $id);
        return $this->db->delete('agendar_consultas');
    }

}