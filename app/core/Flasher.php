<?php 

class Flasher {

    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if(isset($_SESSION['flash'])){
            echo '<div class="alert alert-'. $_SESSION['flash']['tipe'] . ' alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Data Mahasiswa ' . $_SESSION['flash']['pesan'] . ' </strong> ' . $_SESSION['flash']['aksi'] . '.
                </div>';
            unset($_SESSION['flash']);
        }
    }
}