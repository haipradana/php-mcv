<div class="container">
    <div class="mt-5 p-5 bg-secondary text-white rounded">
        <?php if(isset($_SESSION['user'])): ?>
            <h1>Selamat Datang</h1>
            <p>Halo, <?=$data['nama'];?></p>
        <?php else: ?>
            <h1>Selamat Datang di Website Kami</h1>
            <p class="mt-4">Silahkan <a href="<?=BASEURL;?>/auth/login" class="text-white bg-primary p-1 text-decoration-none rounded">
                Login</a> atau <a href="<?=BASEURL;?>/auth/register" class="text-black bg-warning p-1 text-decoration-none rounded">Register</a> untuk melanjutkan.
            </p>
        <?php endif; ?>
    </div>
</div>