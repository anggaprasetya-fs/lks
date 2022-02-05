<?php 

class Admin_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getData()
    {
        return $this->db->order_by('data_id', 'ASC')->get('t_data');
    }

    function getLastDataId()
    {
        return $this->db->select_max('data_id')->get('t_data');
    }

    function save($data)
    {
        return $this->db->insert('t_data', $data);
    }

    function edit($data, $id)
    {
        return $this->db->update('t_data', $data, ['data_id' => $id]);
    }

    function cekUser($username, $password)
    {
        return $this->db->get_where('t_user', ['user_name' => $username, 'user_password' => $password]);
    }

    function getSpesificDataById($id)
    {
        return $this->db->get_where('t_data', ['data_id' => $id]);
    }

    function delete($id)
    {
        return $this->db->delete('t_data', ['data_id' => $id]);
    }
}


?>