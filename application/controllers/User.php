<?php

class User extends CI_Controller{

public function create(){
$this->load->model('User_model');//this code is write for loading model
$this->form_validation->set_rules('name','Name','required');
$this->form_validation->set_rules('email','Email','required|valid_email');
if($this->form_validation->run()==false){
    $this->load->view('create');


}else {
// save user into the databse 
$formarray=array();
$formarray['name']=$this->input->post('name');
$formarray['email']=$this->input->post('email');
$formarray['create_at']=date('Y-m-d');

$this->User_model->create('$formarray');
$this->session->set_flash_data('success','record addded successfully');
redirect(base_url().'index.php/User/index');


}
}
    
}


?>