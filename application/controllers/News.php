<?php

class News extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_berita');

        $this->navbar = "partials/navbar";
        $this->footer = "partials/footer";

    }

    public function detail($id)
    {
        $cek = $this->m_berita->select_first($id);
        $data['title'] = "Berita.co.id";
        $data['navbar'] = "partials/navbar";
        $data['content'] = 'pages/article/detail';
        $data['footer'] = "partials/footer";

        $data['data'] = $cek;
        $this->load->view('layout/main', $data);
    }
}