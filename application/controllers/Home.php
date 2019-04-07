<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('query');
		$this->load->helper('url');
		$this->load->view('layout/header');
	}

	public function index(){
		$this->load->view('user/index', array());
	}

	public function inputdata()	{
		$this->load->view('user/input');
	}

	public function detail($id){
		$data['detail'] = $this->query->getwhere($id)->result();
		$this->load->view('user/extention',$data);
	}

	public function project($id)	{
		$data['detail'] = $this->query->getwhere($id)->result();
		$this->load->view('user/detail',$data);
	}

}
