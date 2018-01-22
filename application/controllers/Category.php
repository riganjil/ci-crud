<?php

class Category extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_category');
        $this->load->model('m_login');

        $this->navbar = "partials/navbar";
        $this->footer = "partials/footer";

    }

    public function select_list($id)
    {
        $cek = $this->m_category->select_by_kategori_seo($id);
        $data['title'] = "Berita.co.id";
        $data['navbar'] = "partials/navbar";
        $data['content'] = 'pages/article/category';
        $data['footer'] = "partials/footer";

        $data['data'] = $cek;
        $this->load->view('layout/main', $data);
    }

//    function select_list($id){
//        $cek2 = $this->db->get('berita');
//        $data['cek'] = $cek2;
//        $this->load->view('pages/article/category', $data);
////        echo json_encode($cek2);
//    }
}