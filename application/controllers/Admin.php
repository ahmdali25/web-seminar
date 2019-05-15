<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('dashboard_model');
    }

    public function kelola_pengguna()
    {
        $data = array(
            'judul'     => 'Dashboard',
            'user'      => $this->dashboard_model->get_user(),
            'menu'      => $this->dashboard_model->get_menu(),
            'pengguna'  => $this->admin_model->get_pengguna()
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kelola_pengguna', $data);
        $this->load->view('templates/footer');
    }

    public function kelola_seminar()
    {
        $data = array(
            'judul' => 'Dashboard',
            'user'  => $this->dashboard_model->get_user(),
            'menu'  => $this->dashboard_model->get_menu()
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kelola_seminar', $data);
        $this->load->view('templates/footer');
    }

    public function nonaktif($username)
    {
        $this->admin_model->nonaktif_user($username);
        redirect('admin/kelola_pengguna');
    }

    public function aktifkan($username)
    {
        $this->admin_model->aktifkan_user($username);
        redirect('admin/kelola_pengguna');
    }
}