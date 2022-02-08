<?php

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_m');

        if ($this->session->userdata('name') == NULL) 
        {
            $this->session->set_flashdata('UserNotLogin', 'You Must Login First!');
            redirect(base_url('Login'));
        }
    }

    public function index()
    {
        $data['kategori']   = $this->Kategori_m->getAll()->result();
        $this->load->view('kategori/index', $data);
    }

    public function viewAdd()
    {
        $this->load->view('kategori/add');
    }

    public function addNewDataItems()
    {
        $newId  = $this->Kategori_m->getLastDataId()->result()[0]->id_kategori+1;

        $data       = [
            'id_kategori'           => (int)$newId,
            'nama_kategori'         => $this->input->post('nama_kategori'),
        ];

        $enter      = $this->Kategori_m->save($data);

        if ($enter == true) 
        {
            $this->session->set_flashdata('successInsertData', 'Successfully Insert Data');
            redirect('Kategori');
        }
    }

    public function getItemsById($id)
    {
        $data['edit']   = $this->Kategori_m->getSpesificDataById($id)->result();
        $this->load->view('kategori/edit', $data);
    }

    public function deleteItemsById($id)
    {
        $enter      = $this->Kategori_m->delete($id);

        if ($enter == TRUE) 
        {
            $this->session->set_flashdata('successInsertData', 'Successfully Delete Data');
            redirect('Kategori');
        }
    }

    public function saveDataItems()
    {
        $data       = [
            'nama_kategori'         => $this->input->post('nama_kategori'),
        ];

        $enter      = $this->Kategori_m->edit($data, $this->input->post('id'));

        if ($enter == true) 
        {
            $this->session->set_flashdata('successInsertData', 'Successfully Edit Data');
            redirect('Kategori');
        }
    }

    public function sample()
    {
        $enter = $this->Kategori_m->getLastDataId();
        echo '<pre>';
        print_r($enter->result());
    }

}


?>