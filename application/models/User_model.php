<?php
class User_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }

    public function create($formarray) {
        // Insert data into the 'users' table
        $this->db->insert('users', $formarray);

        // Check if the insertion was successful
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function all() {
        $query = $this->db->get('users');
        return $query->result();
    }
}
?>
