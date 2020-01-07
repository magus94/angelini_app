<?php


class Videos_model extends CI_Model {

    public function getVideos(){
        return $this->db->get('videos')->result();
    }

    public function getUrlVideos(){
        $this->db->select('url_curta');
        $x = $this->db->get('videos')->result();

        $result = '[';
        foreach ($x as $value){
            $result .= "'";
            $result .= $value->url_curta;
            $result .= "', ";
        }

        $result .= "'']";
        return $result;
    }

    public function salvar() {
        $data = $this->input->post();

        $data['url_curta'] = str_replace('https://www.youtube.com/watch?v=', '', $data['url']);
        return $this->db->insert('videos', $data);

    }

    public function apagar(){
        $id = $this->input->post('id');

        $this->db->where('idVideos', $id);
        return $this->db->delete('videos');
    }

    public function qtdeVideos(){
        return $this->db->count_all('videos');
    }
}