<?php

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');

        if ($this->session->userdata('name') == NULL) 
        {
            $this->session->set_flashdata('UserNotLogin', 'You Must Login First!');
            redirect(base_url('Login'));
        }
        else if ($this->session->userdata('role') == NULL)
        {
            $this->session->set_flashdata('NotAdmin', 'You are Not Admin!');
            redirect(base_url('Admin'));
        }
    }

    public function index()
    {
        $data['user']   = $this->User_m->getAll()->result();
        // $data['owned']  = $this->user_m-;
        $this->load->view('user/index', $data);
    }

    public function viewAdd()
    {
        $this->load->view('user/add');
    }

    public function addNewDataItems()
    {
        $newId  = $this->User_m->getLastDataId()->result()[0]->id_user+1;

        $data       = [
            'id_user'           => (int)$newId,
            'nama_user'         => $this->input->post('username'),
            'nama_umkm'         => $this->input->post('nama_umkm'),
            'lokasi_umkm'       => $this->input->post('lokasi_umkm'),
            'password_umkm'     => md5($this->input->post('password_umkm')),
            'role_user'         => $this->input->post('role')
        ];

        $enter      = $this->User_m->save($data);

        if ($enter == true) 
        {
            $this->session->set_flashdata('successInsertData', 'Successfully Insert Data');
            redirect('User');
        }
    }

    public function registerNewUser()
    {
        $newId  = $this->User_m->getLastDataId()->result()[0]->id_user+1;

        $data       = [
            'id_user'           => (int)$newId,
            'nama_user'         => $this->input->post('username'),
            'nama_umkm'         => $this->input->post('nama_umkm'),
            'lokasi_umkm'       => $this->input->post('lokasi_umkm'),
            'password_umkm'     => md5($this->input->post('password_umkm')),
            'role_user'         => $this->input->post('role')
        ];

        $enter      = $this->User_m->save($data);

        if ($enter == true) 
        {
            $this->session->set_flashdata('successInsertData', 'Successfully Create Account');
            redirect('Register');
        }
    }

    public function getItemsById($id)
    {
        $data['edit']   = $this->User_m->getSpesificDataById($id)->result();
        $this->load->view('User/edit', $data);
    }

    public function deleteItemsById($id)
    {
        $enter      = $this->User_m->searchDataById($id);

        if ($enter->num_rows() > 0) 
        {
            $this->session->set_flashdata('havePost', 'Failed Delete Data, Delete All User Post First!');
            redirect('User');
        }
        else 
        {
            $enter      = $this->User_m->delete($id);

            if ($enter == TRUE) 
            {
                $this->session->set_flashdata('successInsertData', 'Successfully Delete Data');
                redirect('User');
            }
            else 
            {
                $this->session->set_flashdata('failedInsertData', 'Failed Delete Data');
                redirect('User');
            }
        }
    }

    public function saveDataItems()
    {
        $data       = [
            'nama_user'         => $this->input->post('username'),
            'nama_umkm'         => $this->input->post('nama_umkm'),
            'lokasi_umkm'       => $this->input->post('lokasi_umkm'),
            'password_umkm'     => md5($this->input->post('password'))
        ];

        $enter      = $this->User_m->edit($data, $this->input->post('id'));

        if ($enter == true) 
        {
            $this->session->set_flashdata('successInsertData', 'Successfully Edit Data');
            redirect('User');
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
        $enter = $this->User_m->getOwned();
        echo '<pre>';
        print_r($enter->result());
    }

}


?>