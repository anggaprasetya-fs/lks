<?php

class User_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAll()
    {
        return $this->db->get('t_user');
    }

    function getLastDataId()
    {
        return $this->db->select_max('user_id')->get('t_user');
    }

    function save($data)
    {
        return $this->db->insert('t_user', $data);
    }

    function getSpesificDataById($id)
    {
        return $this->db->get_where('t_user', ['user_id' => $id]);
    }

    function edit($data, $id)
    {
        return $this->db->update('t_user', $data, ['user_id' => $id]);
    }

    function delete($id)
    {
        return $this->db->delete('t_user', ['user_id' => $id]);
    }
}


?>