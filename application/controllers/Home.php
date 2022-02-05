<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('Home_m');
		$this->load->model('Admin_m');
	}

	public function index()
	{
		$this->load->view('home/index');
	}

	public function login()
	{
		$this->load->view('home/login');
	}

    public function cekLogin()
    {
        $username   = $this->input->post('username');
        $password   = md5($this->input->post('password'));

        $enter  = $this->Admin_m->cekUser($username, $password);
        
        print_r($enter->result());

        if ($enter->num_rows() > 0) 
        {
            $sessArray  = [
                'name'      => $enter->result()[0]->user_name,
                'fullname'  => $enter->result()[0]->user_first_name.' '.$enter->result()[0]->user_last_name,
                'login'     => TRUE
            ];

            $this->session->set_userdata($sessArray);
            $this->session->set_flashdata('UserLoggedIn', $this->session->userdata('fullname'));
            redirect(base_url('Admin'));
        }
        else
        {
            $this->session->set_flashdata('UserNotFound', 'User Not Found !');
            redirect(base_url('Login'));
        }
    }

	public function sample()
	{
		$enter 	= $this->Home_m->get();
		
		foreach ($enter->result() as $key) 
		{
			echo '<pre>';
			print_r($key);
		}
	}
}
