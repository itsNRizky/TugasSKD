<?= $this->extend('auth/template'); ?>
<?= $this->section('content'); ?>

<section class="animate__animated animate__fadeIn ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <a href="<?= base_url(); ?>">
                <h2 class="heading-section">Welcome To Ecoland</h2>
                </a>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center text-xl">Have an account?</h3>
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= route_to('login') ?>" method="post">
                        <?= csrf_field() ?>

                        <?php if ($config->validFields === ['username']) : ?>
                            <div class="form-group">
                                <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="Username" required>
                            </div>
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <input id="password-field" type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                        </div>

                        <?php if ($config->allowRemembering) : ?>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" name="remember" class="<?php if (old('remember')) : ?> checked <?php endif ?>">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            <?php endif; ?>
                    </form>
                    <?php if ($config->allowRegistration) : ?>
                        <a class="ml-12 hover:text-rose-100" href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>