<?php

class About {
    public function index($nama = 'Dana', $pekerjaan = 'Mahasiswa'){
        echo "Halo saya $nama, dan saya saat ini menjadi seorang $pekerjaan";
    }
    public function page()
    {
        echo "About/page";
    }
}