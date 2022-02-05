<?php 

class Home_m extends CI_Model
{
    function __construct()
    {   
        parent::__construct();
    }   

    function get()
    {
        return $this->db->get('t_user');
    }
}


?>