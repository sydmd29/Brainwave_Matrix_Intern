<?php
class Posts extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Post_model'); // Load the Post_model
    }

    public function index() {
        $data['posts'] = $this->Post_model->get_all_posts();
        $this->load->view('posts/index', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $data = [
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'user_id' => $this->session->userdata('user_id')
            ];
            $this->Post_model->create_post($data);
            redirect('posts');
        }
        $this->load->view('posts/create');
    }

    public function edit($id) {
        $data['post'] = $this->Post_model->get_post($id);
        if ($this->input->post()) {
            $update_data = [
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content')
            ];
            $this->Post_model->update_post($id, $update_data);
            redirect('posts');
        }
        $this->load->view('posts/edit', $data);
    }

    public function delete($id) {
        $this->Post_model->delete_post($id);
        redirect('posts');
    }
}
