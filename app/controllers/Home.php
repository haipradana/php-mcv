<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();
        $data['nama'] = isset($_SESSION['user']) ? $_SESSION['user']['username'] : 'Guest';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}