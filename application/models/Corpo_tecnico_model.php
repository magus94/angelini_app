<?php


class Corpo_tecnico_model extends CI_Model {

    public function getCorpoTecnico(){
        return $this->db->get('corpo_tecnico')->result();
    }

    public function getMembro($id){
        $this->db->where('idCorpoTecnico', $id);
        return $this->db->get('corpo_tecnico')->result();
    }

    public function salvar() {
        $data = $this->input->post();

        $config['upload_path'] = './assets/images/membros';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
        $config['max_size'] = 0;
        $this->load->library('upload', $config);

        if($this->upload->do_upload('foto')){
            $data['foto'] = $this->upload->file_name;
            $this->db->insert('corpo_tecnico', $data);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function atualizar() {
        $data = $this->input->post();

        $config['upload_path'] = './assets/images/noticias';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
        $config['max_size'] = 0;
        $this->load->library('upload', $config);

        if($this->upload->do_upload('foto')){
            $data['foto'] = $this->upload->file_name;
        }

        $this->db->where('idCorpoTecnico', $data['idCorpoTecnico']);
        return $this->db->update('corpo_tecnico', $data);
    }

    public function apagar(){
        $id = $this->input->post('id');

        $this->db->where('idCorpoTecnico', $id);
        return $this->db->delete('corpo_tecnico');
    }

    public function qtdeMembros() {
        return $this->db->count_all('corpo_tecnico');
    }
}