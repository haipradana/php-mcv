<div class="container">
    <h2>Login ke Akun Anda</h2>
    <?php Flasher::flash() ?>
    <form action="<?= BASEURL; ?>/auth/processLogin" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">LOGIN</button>
    </form>
</div>