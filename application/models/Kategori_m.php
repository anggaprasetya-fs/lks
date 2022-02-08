<?php

class Kategori_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAll()
    {
        return $this->db->get('t_kategori');
    }

    function getLastDataId()
    {
        return $this->db->select_max('id_kategori')->get('t_kategori');
    }

    function save($data)
    {
        return $this->db->insert('t_kategori', $data);
    }

    function getSpesificDataById($id)
    {
        return $this->db->get_where('t_kategori', ['id_kategori' => $id]);
    }

    function edit($data, $id)
    {
        return $this->db->update('t_kategori', $data, ['id_kategori' => $id]);
    }

    function delete($id)
    {
        return $this->db->delete('t_kategori', ['id_kategori' => $id]);
    }
}


?>