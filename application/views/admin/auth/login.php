<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Laboratorium Manajemen Lanjut</title>
    <meta name="description"
        content="Website - Laboratorium Manajemen Lanjut &amp; Pendaftaran Asisten Baru by Dimas263">
    <meta name="author" content="Dimas263">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title"
        content="Website - Laboratorium Manajemen Lanjut &amp; Pendaftaran Asisten Baru by Dimas263">
    <meta property="og:site_name" content="Laboratorium Manajemen Lanjut Universitas Gunadarma">
    <meta property="og:description"
        content="Website - Laboratorium Manajemen Lanjut &amp; Pendaftaran Asisten Baru by Dimas263">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" href="<?=base_url('assets/admin/')?>assets/media/favicons/bangkinglab_ug.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?=base_url('assets/admin/')?>assets/media/favicons/bangkinglab_ug.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?=base_url('assets/admin/')?>assets/media/favicons/bangkinglab_ug.png">
    <link rel="stylesheet" href="<?=base_url('assets/admin/')?>assets/js/plugins/slick/slick.css">
    <link rel="stylesheet" href="<?=base_url('assets/admin/')?>assets/js/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="<?=base_url('assets/admin/')?>assets/css/codebase.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/public/')?>css/style.css">
</head>

<body oncontextmenu="return false;" class="overflow-hidden" style="background-image: url(<?=base_url('assets/public/images/bg.jpg')?>)">

    <div class="login-container d-flex row card-body">
        <div class="login-left col-6">
            <div class="image-login">
                <img src="<?=base_url('assets/public/')?>images/login3.svg" class="content mx-100 my-200">
            </div>
        </div>
        <div class="login-right col-6">
        <div class="text-center">
                                <a class="link-effect font-w700" href="<?=base_url('')?>">

                                    <img src="<?=base_url('assets/public/')?>images/logo_perbankan.png"
                                        width="100" class="mt-20" style="border-radius: 4rem" />
                                </a>
                                <h1 class="h4 font-w700 mt-30 text-primary mb-10">Laboratorium Manajemen Lanjut</h1>
        </div>
        <form class="js-validation-signin mx-100 mt-50" action="<?=base_url('auth/process')?>" method="post">
            <div class="block block-themed block-rounded block-shadow">
                <div class="block-header bg-gd-dusk">
                    <h3 class="block-title text-center">Login Admin</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-user"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content bg-gd-dusk">

                    <div class="form-group row">

                        <div class="col-12">

                            <label>Username</label>

                            <input type="text" class="form-control" name="npm"
                                placeholder="masukan NPM anda" required>

                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-12">

                            <label>Password</label>

                            <?php
                        ?>
                            <input type="password" class="form-control" name="password"
                                placeholder="masukan password anda" required>

                            <br><br>

                        </div>

                    </div>

                    <div class="form-group row mb-0">

                        <div class="text-sm-right push row mx-auto">

                            <button type="submit" class="btn btn-alt-primary" name="login">

                                <i class="si si-login mr-10"></i> Masuk

                            </button>

                        </div>

                    </div>

                </div>

            </div>

            </form>
        </div>
    </div>

</body>

</html>