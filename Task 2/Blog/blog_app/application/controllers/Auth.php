    <?php
    class Auth extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('User_model'); // Load the Post_model

        }
        public function register() {
            if ($this->input->post()) {
                $data = [
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
                ];
                $this->User_model->register($data);
                redirect('auth/login');
            }
            $this->load->view('auth/register');
        }

        public function login() {
            if ($this->input->post()) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                
                // Load the User model
                $this->load->model('User_model');
        
                // Call the login method in User_model to validate user
                $user = $this->User_model->login($username, $password);
        
                if ($user) {
                    // If login is successful, set session data and redirect
                    $this->session->set_userdata('user_id', $user['id']);
                    redirect('posts');
                } else {
                    // If login fails, set a specific error message and redirect back to the login page
                    $this->session->set_flashdata('error', 'Wrong username or password');
                    redirect('auth/login');
                }
            }
            // Load the login view
            $this->load->view('auth/login');
        }
        

        public function logout() {
            $this->session->unset_userdata('user_id');
            redirect('auth/login');
        }
    }
