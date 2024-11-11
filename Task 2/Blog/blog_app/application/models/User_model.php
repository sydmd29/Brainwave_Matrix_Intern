<?php
class User_model extends CI_Model {
    public function register($data) {
        return $this->db->insert('users', $data);
    }

    public function login($username, $password) {
        // Query the database to check if the username exists
        $this->db->where('username', $username);
        $query = $this->db->get('users'); // 'users' is your table name

        // Check if a user with the username was found
        if ($query->num_rows() > 0) {
            $user = $query->row_array();

            // Verify the password with password_verify
            if (password_verify($password, $user['password'])) {
                // If the password matches, return the user data
                return $user;
            }
        }

        // If username not found or password doesn't match, return false
        return false;
    }
}
