<?php

class User_model extends CI_Model{

function create($formarray){
$this->db->insert('users',$formarray);//insert form array into user table

}

}


?>