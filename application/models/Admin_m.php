<?php 

class Admin_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getData()
    {
        $this->db->select('*');
        $this->db->from('t_data');
        $this->db->join('t_user', 't_data.data_author = t_user.user_id');
        return $this->db->get();
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
        $this->db->select('*');
        $this->db->from('t_data');
        $this->db->where('data_id', $id);
        $this->db->join('t_user', 't_data.data_author = t_user.user_id');
        return $this->db->get();
    }

    function delete($id)
    {
        return $this->db->delete('t_data', ['data_id' => $id]);
    }
}


?>