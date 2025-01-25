<?php

class User_model {
    private $nama;
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getUser() {
        return $this->nama;
    }
    
    // public function register($username, $password) {
    //     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    //     $this->db->query("INSERT INTO users (username, password) VALUES(:username, :password)");
    //     $this->db->bind(":username", $username);
    //     $this->db->bind(":password", $hashedPassword);
    //     return $this->db->execute();  // This directly returns the execution result
    // }

    public function register($username, $password) {
        try {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $this->db->query("INSERT INTO users (username, password) VALUES(:username, :password)");
            $this->db->bind(":username", $username);
            $this->db->bind(":password", $hashedPassword);
            $result = $this->db->execute();
            return $result !== false;
        } catch (Exception $e) {
            return false;
        }
    }

    public function login($username, $password) {
        $this->db->query("SELECT * FROM users WHERE username = :username");
        $this->db->bind(":username", $username);
        $user = $this->db->singleResult();
        
        if ($user && password_verify($password, $user['password'])) {
            $this->nama = $user['username'];  // Set the nama property
            return $user;
        }
        return false;
    }
}
