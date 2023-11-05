<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="login-box">

    <!-- /.login-logo -->
    <div class="card">
        <center><img src="/img/logo_simantra.png" width="30%"></center>
        <div class="login-logo">
            <a href="../../index2.html"><b>SIMANTRA-BPS</b></a>
        </div>
        <div class="card-body login-card-body">

            <?= view('Myth\Auth\Views\_message_block') ?>
            <form action="<?= url_to('login') ?>" method="post">
                <?= csrf_field() ?>

                <?php if ($config->validFields === ['email']) : ?>
                    <div class="form-group">
                        <label for="login"><?= lang('Auth.email') ?></label>
                        <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="form-group">
                        <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                        <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="password"><?= lang('Auth.password') ?></label>
                    <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>
                </div>

                <?php if ($config->allowRemembering) : ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                            <?= lang('Auth.rememberMe') ?>
                        </label>
                    </div>
                <?php endif; ?>

                <br>

                <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
            </form>


            <p class="mb-0">
                <a href="/register" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<?= $this->endSection(); ?>