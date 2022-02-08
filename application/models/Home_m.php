<?php 

class Home_m extends CI_Model
{
    function __construct()
    {   
        parent::__construct();
    }   

    function getAllDataBarang()
    {
        $this->db->select('*');
        $this->db->order_by('id_barang', 'ASC');
        $this->db->from('t_barang');
        $this->db->join('t_user', 't_barang.umkm_penjual = t_user.id_user');
        $this->db->join('t_kategori', 't_barang.kategori_barang = t_kategori.id_kategori');
        return $this->db->get();
    }

    function getKategori()
    {
        return $this->db->order_by('id_kategori', 'ASC')->get('t_kategori');
    }

    function getUmkm()
    {
        $this->db->select('*');
        $this->db->order_by('id_user', 'ASC');
        $this->db->from('t_user');
        $this->db->where('role_user', 'umkm');
        return $this->db->get();
    }

    function filterBarang($kategori, $penjual)
    {
        $this->db->select('*');
        $this->db->order_by('id_barang', 'ASC');
        $this->db->from('t_barang');
        $this->db->where('kategori_barang', $kategori);
        $this->db->where('umkm_penjual', $penjual);
        $this->db->join('t_user', 't_barang.umkm_penjual = t_user.id_user');
        $this->db->join('t_kategori', 't_barang.kategori_barang = t_kategori.id_kategori');
        return $this->db->get();
    }
}


?>