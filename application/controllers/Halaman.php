<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// $this->load->helper('url');
	}

	public function tampil()
	{
		$data['title'] = "ini konten yang dinamis";
		$data['dataKaryawan'] = $this->Karyawan_model->semua()->row();

		$this->load->view('template/header', $data);
		$this->load->view('tampilanSaya', $data);
		$this->load->view('template/footer', $data);
	}

	public function aku_kamu($anak = "")
	{
		$data['title'] = "ini halaman aku kamu";
		$data['dataKaryawan'] = $this->Karyawan_model->semua()->row();

		$this->load->view('template/header', $data);
		$this->load->view('tampilanSaya', $data);
		$this->load->view('template/footer', $data);

	}
}
