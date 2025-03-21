<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Dashboard";

    $this->load->view('template/header', $data);
    $this->load->view('pages/dashboard', $data);
    $this->load->view('template/footer', $data);
	}
}
