<?= $this->extend('auth/template'); ?>
<?= $this->section('content'); ?>
<section class="animate__animated animate__fadeIn ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Verifikasi OTP</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center text-xl">Periksa email Anda</h3>
                    <h3 class="mb-4 text-center text-xl"><?= user()->email; ?></h3>
                    <h3 class="mb-4 text-center text-xl"><?= session('OTP') ?></h3>
                    <form action="<?= base_url('Items/otpVer') ?>" method="post">
                        <div class="form-group">
                            <input id="otp" type="number" name="kode" class="form-control" placeholder="Masukan OTP Anda" required>
                            <span toggle="#otp" class="fa fa-fw fa-eye field-icon toggle-otp"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>