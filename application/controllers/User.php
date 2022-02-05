<?php

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
    }

    public function index()
    {
        $data['user']   = $this->User_m->getAll()->result();
        $this->load->view('user/index', $data);
    }

    public function viewAdd()
    {
        $this->load->view('user/add');
    }

    public function addNewDataItems()
    {
        $newId  = $this->User_m->getLastDataId()->result()[0]->user_id+1;

        $data       = [
            'user_id'           => (int)$newId,
            'user_name'         => $this->input->post('username'),
            'user_first_name'   => $this->input->post('firstname'),
            'user_last_name'    => $this->input->post('lastname'),
            'user_role'         => $this->input->post('role'),
            'user_password'     => md5($this->input->post('password'))
        ];

        $enter      = $this->User_m->save($data);

        if ($enter == true) 
        {
            $this->session->set_flashdata('successInsertData', 'Successfully Insert Data');
            redirect('User');
        }
    }

    public function getItemsById($id)
    {
        $data['edit']   = $this->User_m->getSpesificDataById($id)->result();
        $this->load->view('User/edit', $data);
    }

    public function deleteItemsById($id)
    {
        $enter      = $this->User_m->delete($id);

        if ($enter == TRUE) 
        {
            $this->session->set_flashdata('successInsertData', 'Successfully Delete Data');
            redirect('User');
        }
    }

    public function saveDataItems()
    {
        $data       = [
            'user_name'         => $this->input->post('username'),
            'user_first_name'   => $this->input->post('firstname'),
            'user_last_name'    => $this->input->post('lastname'),
            'user_role'         => $this->input->post('role'),
            'user_password'     => md5($this->input->post('password'))
        ];

        $enter      = $this->User_m->edit($data, $this->input->post('id'));

        if ($enter == true) 
        {
            $this->session->set_flashdata('successInsertData', 'Successfully Insert Data');
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
        $enter = $this->User_m->getLastDataId();
        echo '<pre>';
        print_r($enter->result());
    }

}


?>