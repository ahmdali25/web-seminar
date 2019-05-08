<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function index()
    {
        $data = array(
            'judul' => 'Dashboard',
            'user'  => $this->dashboard_model->get_user(),
            'menu'  => $this->dashboard_model->get_menu()
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);

        if($data['user']['level_akses'] == 1)
            $this->load->view('admin/index');
        else if($data['user']['level_akses'] == 2)
            $this->load->view('penyedia/index');
        else
            $this->load->view('peserta/index');
        
        $this->load->view('templates/footer');
    }

}