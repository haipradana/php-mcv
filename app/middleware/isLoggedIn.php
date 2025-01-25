<?php
function isLoggedIn() {
    if (!isset($_SESSION['user'])) {
        header('Location: ' . BASEURL . '/auth/login');
        exit;
    }
}