<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Seminar Aja";
		$this->load->view('home/home_page', $data);
	}
}
