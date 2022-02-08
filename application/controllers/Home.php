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
		$data['data_all']		= $this->Home_m->getAllDataBarang()->result();
		$data['kategori']		= $this->Home_m->getKategori()->result();
		$data['umkm']			= $this->Home_m->getUmkm()->result();
		$this->load->view('home/index', $data);
	}

	public function login()
	{
		$this->load->view('home/login');
	}

	public function register()
	{
		$this->load->view('home/register');
	}

	public function filter()
	{
		$kategori 	= $this->input->post('filter_kategori') != NULL ? $this->input->post('filter_kategori') : NULL;
		$penjual	= $this->input->post('filter_penjual') != NULL ? $this->input->post('filter_penjual') : NULL;

		$data['filter']		= $this->Home_m->filterBarang($kategori, $penjual)->result();
		$this->load->view('home/filter', $data);
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
				'id'		=> $enter->result()[0]->id_user,
                'name'      => $enter->result()[0]->nama_user,
				'umkm'		=> $enter->result()[0]->nama_umkm,
				'role'		=> $enter->result()[0]->role_user == 'admin' ? TRUE : FALSE,
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
		$enter 	= $this->Home_m->filterBarang(3, 1);
		// echo '<pre>';
		// print_r($enter);
		foreach ($enter->result() as $key) 
		{
			echo '<pre>';
			print_r($key);
		}
	}
}
