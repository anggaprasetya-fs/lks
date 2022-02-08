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
        $this->db->order_by('id_barang', 'ASC');
        $this->db->from('t_barang');
        $this->db->join('t_user', 't_barang.umkm_penjual = t_user.id_user');
        $this->db->join('t_kategori', 't_barang.kategori_barang = t_kategori.id_kategori');
        return $this->db->get();
    }

    function getDataByUser($id)
    {
        $this->db->select('*');
        $this->db->order_by('id_barang', 'ASC');
        $this->db->where('umkm_penjual', $id);
        $this->db->from('t_barang');
        $this->db->join('t_user', 't_barang.umkm_penjual = t_user.id_user');
        $this->db->join('t_kategori', 't_barang.kategori_barang = t_kategori.id_kategori');
        return $this->db->get();
    }

    function getKategori()
    {
        return $this->db->get('t_kategori');
    }

    function getUmkm()
    {
        return $this->db->get('t_user');
    }

    function getLastDataId()
    {
        return $this->db->select_max('id_barang')->get('t_barang');
    }

    function save($data)
    {
        return $this->db->insert('t_barang', $data);
    }

    function edit($data, $id)
    {
        return $this->db->update('t_barang', $data, ['id_barang' => $id]);
    }

    function cekUser($username, $password)
    {
        return $this->db->get_where('t_user', ['nama_user' => $username, 'password_umkm' => $password]);
    }

    function getSpesificDataById($id)
    {
        $this->db->select('*');
        $this->db->order_by('id_barang', 'ASC');
        $this->db->from('t_barang');
        $this->db->where('id_barang', $id);
        $this->db->join('t_user', 't_barang.umkm_penjual = t_user.id_user');
        $this->db->join('t_kategori', 't_barang.kategori_barang = t_kategori.id_kategori');
        return $this->db->get();
    }

    function delete($id)
    {
        return $this->db->delete('t_barang', ['id_barang' => $id]);
    }
}


?>