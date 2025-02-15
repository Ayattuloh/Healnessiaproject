<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- costum css -->
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body {
            background: linear-gradient(269.72deg, #B83AE2 1.89%, #23BCEC 96.84%);
            ;
            padding-top: 10vh;
        }

        form {
            background: white;
            opacity: 0.9;

        }

        .form-container {
            border-radius: 10px;
            padding: 30px;
        }
    </style>
</head>

<body>
    <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form class="form-container" action="backendRegister.php" method="POST">
                    <h4 class="text-center font-weight-bold"> DAFTAR AKUN </h4>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="Nama">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email</label>
                        <input type="email" class="form-control" id="InputEmail" aria-describeby="email" placeholder="email" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="validationDefault02">Jenis kelamin</label>
                        <p><input type='radio' name='jenis_kelamin' value='Laki-Laki' />Laki-Laki</p>
                        <p><input type='radio' name='jenis_kelamin' value='Perempuan' />Perempuan</p>
                    </div>
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="Username">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" placeholder="masukan Password" name="Password">
                    </div>
                    <div class="form-group">
                        <label for="validationDefault05">Umur</label>
                        <input type="number" class="form-control" id="validationDefault05" placeholder="0" name="Umur" required>
                    </div>
                    <div class="form-group">
                        <label for="validationDefault05">Tanggal lahir</label>
                        <input type="date" class="form-control" id="validationDefault05" placeholder="" name="Date" required>
                    </div>
                    <div class="form-group">
                        <label for="validationDefault05">Alamat</label>
                        <input type="text" class="form-control" id="validationDefault05" placeholder="Alamat" name="Alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Nomor hp</label>
                        <input type="number" class="form-control" id="InputRePassword" placeholder="No HP" name="NoHP">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">DAFTAR</button>
                    <div class="form-footer mt-2">
                        <p> Sudah punya account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </section>
        </section>
    </section>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, danyang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>