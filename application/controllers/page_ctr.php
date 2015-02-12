<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_ctr extends CI_Controller {

	public function index()
	{
		$this->load->model('model_index');
		$data = $this->model_index->getOperator();	
		$data['data']=$data;
		$this->load->view('index',$data);
		$this->load->view('footer');
	}

	public function index_user()
	{
		$this->load->view('header');
		$this->load->model('model_index');
		$data = $this->model_index->getOperator();	
		$data['data']=$data;
		$this->load->view('index_page',$data);
		$this->load->view('footer');
	}

	public function detail()
	{
		$this->load->view('header');
		$this->load->view('detail_page');
		$this->load->view('footer');
	}

	public function reg_opt()
	{
		$this->load->view('header');
		$this->load->view('reg_option');
		$this->load->view('footer');
	}

	public function user_reg()
	{
		$this->load->view('header');
		$this->load->view('user_registration');
		$this->load->view('footer');
	}

	public function operator_reg()
	{
		$this->load->view('header');
		$this->load->view('operator_registration');
		$this->load->view('footer');
	}

	public function booking_page()
	{
		if(!$this->session->userdata('akun'))
		{
			redirect('page_ctr/login_page');
		}
		else
		{
			$this->load->model('model_index');
			$data = $this->model_index->getOperator();	
			$data['data']=$data;
		
			$this->load->view('header');
			$this->load->view('booking_page',$data);
			$this->load->view('footer');
		}
	}

	public function login_page()
	{
		$this->load->view('header_login');
		$this->load->view('login_page');
		$this->load->view('footer');
	}
	public function coba()
	{
		//$this->load->view('header');
		$this->load->view('datepicker');
		//$this->load->view('footer');
	}
	
}
