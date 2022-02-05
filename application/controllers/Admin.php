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
        $data['postingan'] = $this->Admin_m->getData()->result();
        $this->load->view('admin/index', $data);
    }

    public function viewAdd()
    {
        $this->load->view('admin/add');
    }

    public function addNewDataItems()
    {
        $newId  = $this->Admin_m->getLastDataId()->result()[0]->data_id+1;
        
        // {
            $config['upload_path']      = './assets/img/items/';
            $config['allowed_types']    = 'jpg|png|jpeg|gif';
            $config['file_name']        = $this->input->post('section').'-'.uniqid().date('-d-m-Y');

            $this->upload->initialize($config);

            if ($this->upload->do_upload('data_image'))
            {
                $filename   = $this->upload->data('file_name');

                $data       = [
                    'data_id'       => (int)$newId,
                    'data_title'    => $this->input->post('title'),
                    'data_role'     => $this->input->post('section'),
                    'data_caption'  => $this->input->post('caption'),
                    'data_image'    => base_url().'/assets/img/items/'.$filename,
                    'data_author'   => $this->session->userdata('id')
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
        // }
    }

    public function getItemsById($id)
    {
        $data['edit']   = $this->Admin_m->getSpesificDataById($id)->result();
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
        $config['file_name']        = $this->input->post('section').'-'.uniqid().date('-d-m-Y');

        $this->upload->initialize($config);

        if ($this->upload->do_upload('data_image'))
        {
            $filename   = $this->upload->data('file_name');

            $data       = [
                'data_title'    => $this->input->post('title'),
                'data_role'     => $this->input->post('section'),
                'data_caption'  => $this->input->post('caption'),
                'data_image'    => base_url().'/assets/img/items/'.$filename,
                'data_author'   => $this->session->userdata('id')
            ];

            $enter      = $this->Admin_m->edit($data, $this->input->post('id'));

            if ($enter == true) 
            {
                $this->session->set_flashdata('successInsertData', 'Successfully Edit Data');
                redirect('Admin');
            }
            else 
            {
                echo $enter;
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
        $enter = $this->Admin_m->getLastDataId();
        echo '<pre>';
        print_r($enter->result());
    }
}


?>