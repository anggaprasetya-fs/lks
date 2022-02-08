<?php

class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
    }

    public function registerNewUser()
    {
        $newId  = $this->User_m->getLastDataId()->result()[0]->id_user+1;

        $data       = [
            'id_user'           => (int)$newId,
            'nama_user'         => $this->input->post('username'),
            'nama_umkm'         => $this->input->post('nama_umkm'),
            'lokasi_umkm'       => $this->input->post('lokasi_umkm'),
            'password_umkm'     => md5($this->input->post('password')),
            'role_user'         => "umkm"
        ];

        $enter      = $this->User_m->save($data);

        if ($enter == true) 
        {
            $this->session->set_flashdata('successInsertData', 'Successfully Create Account');
            redirect('Register');
        }
    }
}


?>