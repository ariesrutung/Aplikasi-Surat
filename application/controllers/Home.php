<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');
        $this->load->model('Slider_model', 'slider');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Home - Kelurahan Pulau',
            'sub_title' => ''
        ];

        $data['active_sliders'] = $this->slider->get_active_sliders();

        $this->load->view('frontend/new_ui/header', $judul);
        $this->load->view('frontend/new_ui/home', $data);
        $this->load->view('frontend/new_ui/footer', $data);
    }
}
