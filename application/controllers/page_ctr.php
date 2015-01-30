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

	public function detail()
	{
		$this->load->view('header');
		$this->load->view('detail_page');
		$this->load->view('footer');
	}

	public function admin()
	{
		$this->load->view('header');
		$this->load->view('admin_page');
		$this->load->view('footer');
	}

	public function operator()
	{
		$this->load->view('header');
		$this->load->view('operator_page');
		$this->load->view('footer');
	}


}
