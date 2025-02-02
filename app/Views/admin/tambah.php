<?= $this->extend('templates/index'); ?>

<?= $this->section('konten-utama'); ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/manajemenUser">Manajemen User</a></li>
                    <li class="breadcrumb-item active">Tambah AKun</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="card mt-1 card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Akun Pengguna</h3>
            </div>
            <br>
            <div class="card-body">

          
            <?= view('Myth\Auth\Views\_message_block') ?>
            <form class="user" action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                    </div>
                    <div class="col-sm-6">
                        <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    <?= lang('Auth.register') ?>
                </button>
                <hr>
            </form>
            </div>
            <!--  -->
        </div>
    </div>

</div>



<?= $this->endSection(); ?>