<!doctype html>
<html lang="en" class="no-focus">
<head>
    <meta charset="utf-8">
    <title>Menambah Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>assets/css/codebase.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            font-weight: bold;
        }
        
        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3 class="text-center">Tambah Admin</h3>
        <form action="<?= base_url('Auth/create') ?>" class="js-validation-signup" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="form-label">Foto</label><br>
                <label class="form-label text-danger">Upload foto dalam bentuk jpg atau png</label><br>
                <label class="form-label text-danger">Maksimal ukuran foto 2 MB</label>
                <input type="file" class="form-control" name="foto" required>
            </div>
            <div class="form-group">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama.." required>
            </div>
            <div class="form-group">
                <label class="form-label">Nama Role</label>
                <input type="text" class="form-control" name="npm" placeholder="NPM.." required>
            </div>
            <div class="form-group">
                <label class="form-label">Sebagai</label>
                <select class="form-control" name="level" required>
                    <option value="">-- Pilih --</option>
                    <option value="teller">Teller</option>
                    <option value="headteller">Head Teller</option>
                    <option value="customerservice">Customer Service</option>
                    <option value="cashoficer">Cash Officer</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="signup-password">Password</label>
                <input type="password" class="form-control" placeholder="Password" id="signup-password" name="signup-password" required>
                <small class="text-danger">- Password maksimal 6 karakter, password dilarang mengandung simbol selain huruf dan angka, serta password dianjurkan menggunakan huruf kecil</small>
            </div>
            <div class="form-group">
                <label class="form-label" for="signup-password-confirm">Konfirmasi Password</label>
                <input type="password" class="form-control" placeholder="Konfirmasi Password" id="signup-password-confirm" name="signup-password-confirm" required>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn">Buat Akun</button>
            </div>
        </form>
    </div>

    <script src="<?= base_url('assets/admin/') ?>assets/js/codebase.core.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>assets/js/codebase.app.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>assets/js/pages/op_auth_signup.min.js"></script>
    <script>
        document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
                return false;
            } else {
                return true;
            }
        };
        $(document).keypress("u", function(e) {
            if (e.ctrlKey) {
                return false;
            } else {
                return true;
            }
        });
    </script>
    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>

</body>
</html>
