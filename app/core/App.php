<?php

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // controller
        if ($url) { //apakah url ada
            if(file_exists('../app/controllers/' . $url[0] . '.php')){
                $this->controller = $url[0];
                unset($url[0]);
            }
        }

        include '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //method
        if($url && isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //params
        if($url && !empty($url)){
            $this->params = array_values($url);
        }


        // jalankan controller dan methosd, srta mengrimkan params kalau exist
        call_user_func_array([$this->controller, $this->method], $this->params);
    }


    public function parseUrl()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
        return false;
    }
}