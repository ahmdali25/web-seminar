<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('auth/login');
    }
    
    public function registration()
    {
        $this->load->view('auth/registration');
    }

    public function forgot_password()
    {
        $this->load->view('auth/forgot_password');
    }
}
