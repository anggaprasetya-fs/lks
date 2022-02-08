<?php 

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_m');
        
        if ($this->session->userdata('name') == NULL) 
        {
            $this->session->set_flashdata('UserNotLogin', 'You Must Login First!');
            redirect(base_url('Login'));
        }
    }

    public function index()
    {
        $enter  = $this->session->userdata('role') == TRUE ? $this->Admin_m->getData() : $this->Admin_m->getDataByUser($this->session->userdata('id'));
        $data[] = [];

        if($enter->result() > 0)
        {
            $data['postingan'] = $enter->result();
        }
        
        $this->load->view('admin/index', $data);
    }

    public function viewAdd()
    {
        $data['kategori']   = $this->Admin_m->getKategori()->result();
        $data['umkm']       = $this->Admin_m->getUmkm()->result();
        $this->load->view('admin/add', $data);
    }

    public function addNewDataItems()
    {
        $newId  = $this->Admin_m->getLastDataId()->result()[0]->id_barang+1;
        
        $config['upload_path']      = './assets/img/items/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['file_name']        = $this->input->post('nama_barang').'-'.uniqid().date('-d-m-Y');

        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar'))
        {
            $filename   = $this->upload->data('file_name');

            $data       = [
                'id_barang'         => (int)$newId,
                'nama_barang'       => $this->input->post('nama_barang'),
                'deskripsi_barang'  => $this->input->post('deskripsi_barang'),
                'harga_barang'      => $this->input->post('harga_barang'),
                'gambar_barang'     => '/assets/img/items/'.$filename,
                'umkm_penjual'      => $this->session->userdata('id'),
                'kategori_barang'   => $this->input->post('kategori_barang'),
            ];

            $enter      = $this->Admin_m->save($data);

            if ($enter == true) 
            {
                $this->session->set_flashdata('successInsertData', 'Successfully Insert Data');
                redirect('Admin');
            }
        }
        else
        {
            print_r($this->upload->display_errors());
        }
    }

    public function getItemsById($id)
    {
        $data['edit']       = $this->Admin_m->getSpesificDataById($id)->result();
        $data['kategori']   = $this->Admin_m->getKategori()->result();
        $this->load->view('Admin/edit', $data);
    }

    public function deleteItemsById($id)
    {
        $enter      = $this->Admin_m->delete($id);

        if ($enter == TRUE) 
        {
            $this->session->set_flashdata('successInsertData', 'Successfully Delete Data');
            redirect('Admin');
        }
    }

    public function saveDataItems()
    {
        $config['upload_path']      = './assets/img/items/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['file_name']        = $this->input->post('nama_barang').'-'.uniqid().date('-d-m-Y');

        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar'))
        {
            $filename   = $this->upload->data('file_name');

            $data       = [
                'nama_barang'       => $this->input->post('nama_barang'),
                'deskripsi_barang'  => $this->input->post('deskripsi_barang'),
                'harga_barang'      => $this->input->post('harga_barang'),
                'gambar_barang'     => '/assets/img/items/'.$filename,
                // 'umkm_penjual'      => $this->session->userdata('id'),
                'umkm_penjual'      => 1,
                'kategori_barang'   => $this->input->post('kategori_barang'),
            ];

            $enter      = $this->Admin_m->edit($data, $this->input->post('id'));

            if ($enter == true) 
            {
                $this->session->set_flashdata('successInsertData', 'Successfully Edit Data');
                redirect('Admin');
            }
        }
        else
        {
            print_r($this->upload->display_errors());
        }
    }

    public function logout()
    {
        $sessArray  = [
            'name', 'fullname', 'login'
        ];
        
        $this->session->sess_destroy();
        $this->session->unset_userdata($sessArray);
        redirect('Login');
    }

    public function sample()
    {
        $newId  = $this->Admin_m->getDataByUser('1')->result();
        echo '<pre>';
        print_r($newId);
    }
}


?>