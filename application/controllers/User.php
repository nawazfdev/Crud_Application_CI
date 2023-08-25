<?php

class User extends CI_Controller{
    public function __construct() {
        parent::__construct(); // Call the parent constructor
        $this->load->model('User_model'); // Load the User_model
    }
  public function index(){
$this->load->model('User_model');
$users=$this->User_model->all();
$data=array();
$data['users']=$users;
$this->load->view('list',$data);
// print_r($data);


  }
    public function create() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('create');
           
        } else {
            $formarray = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'created_at' => date('Y-m-d')
            );

            if ($this->User_model->create($formarray)) {
                $this->session->set_flashdata('success', 'Record added successfully');
                redirect('user/index');
            } else {
                $this->session->set_flashdata('error', 'Failed to insert data');
                redirect('index.php/User/index');
            }
        }
    }  
    
}


?>