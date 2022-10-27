<?php

class control_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->helper('url', 'date');
    }

    public function dashboard()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_index');
        $this->load->view('template/footer');
    }

    public function view_billing()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_billing');
        $this->load->view('template/footer');
    }

    public function view_send_mail()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_send_mail');
        $this->load->view('template/footer');
    }

    public function view_approval()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_approval');
        $this->load->view('template/footer');
    }

    public function view_app_aprove()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_app_aprove');
        $this->load->view('template/footer');
    }

    public function view_app_all()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_app_all');
        $this->load->view('template/footer');
    }

    public function view_laporan()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_laporan');
        $this->load->view('template/footer');
    }

    public function view_login()
    {
        $this->load->view('v_login');
    }

    public function view_pengaturan()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_pengaturan');
        $this->load->view('template/footer');
    }

    /*public function jsonUnitOnChange()
    {
        $postData = $this->input->post('postData');
        $data = $this->m_admin->getUnit($postData);
        echo json_encode($data);
    }*/
}

