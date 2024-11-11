<?php
class Post_model extends CI_Model {
    public function get_all_posts() {
        return $this->db->get('posts')->result_array();
    }

    public function get_post($id) {
        return $this->db->get_where('posts', ['id' => $id])->row_array();
    }

    public function create_post($data) {
        return $this->db->insert('posts', $data);
    }

    public function update_post($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('posts', $data);
    }

    public function delete_post($id) {
        $this->db->where('id', $id);
        return $this->db->delete('posts');
    }
}
