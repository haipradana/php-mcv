<?php

class Auth extends Controller {
    public function register() {
        $data['judul'] = 'Register';
        $this->view('templates/header', $data);
        $this->view('auth/register', $data);
        $this->view('templates/footer');
    }

    public function login() {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('auth/login', $data);
        $this->view('templates/footer');
    }

    public function processRegister() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->model('User_model')->register($username, $password)){
                Flasher::setFlash('berhasil','registrasi', 'success');
                header('Location: ' . BASEURL . '/auth/login');
                exit;
            }else{
                Flasher::setFlash('Gagal','registrasi','danger');
                header('Location: '. BASEURL . '/auth/register');
                exit;
            }
        }
    }
    public function processLogin() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->model('User_model')->login($username, $password);

            if ($user){
                $_SESSION['user'] = $user;
                header('Location: ' . BASEURL);
                exit;
            }else{
                Flasher::setFlash('Gagal','login','danger');
                header('Location: '. BASEURL . '/auth/login');
                exit;
            }
        }
    }

    public function logout(){
        unset($_SESSION['user']);
        session_destroy();
        header('Location: '. BASEURL);
    }

}