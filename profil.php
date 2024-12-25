<?php include 'connect.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h1 class="mt-3 mb-3 text-center">Profil</h1>
        <div class="container">
        <form action="update.php" method="POST">
        <table class="table">
            <thead class="table-primary text-center font-weight-bold">
                <tr>
                    <td>Data</td>
                    <td>Isi</td>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = 'SELECT * FROM tbl_user WHERE idUser="'.$_SESSION['idUser'].'"';

                $query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_object($query)) {
            ?>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" class="form-control" id="name" name="Nama" value="<?php echo $row->Nama; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" class="form-control" id="name" name="Alamat" value="<?php echo $row->Alamat; ?>"></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="number" class="form-control" id="name" name="Umur" value="<?php echo $row->Umur; ?>"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" class="form-control" id="name" name="Username" value="<?php echo $row->Username; ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" class="form-control" id="name" name="Password" value="<?php echo $row->Password; ?>"></td>
                </tr>
                <tr>
                    <td>Nomor Handphone</td>
                    <td><input type="number" class="form-control" id="name" name="noHP" value="<?php echo $row->noHP; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" class="form-control" id="name" name="email" value="<?php echo $row->email; ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" class="form-control" id="name" name="tanggalLahir" value="<?php echo $row->tanggalLahir; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                    <?php
                    if($row->jenisKelamin== "Laki-Laki"){
                        echo '
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki" checked/> Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan"/> Perempuan
                        ';
                    } elseif($row->jenisKelamin== "Perempuan"){
                        echo '
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki"/> Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan" checked/> Perempuan
                        ';
                    }
                    
                    ?>
                    <input type='radio' name='jenis_kelamin' value='Laki-Laki' />
                
                
                    </td>
                </tr>

            </tbody>
        </table>
        <div class="text-center font-weight-bold">
        <button type=submit class="btn btn-danger">Simpan<i class="icofont-simple-right ml-2"></i></button>
        <a href="index.php" class="btn btn-light">Kembali</a>
        <a href="isiBookmark.php" class="btn btn-light">Bookmark</a>

        </div>
        </form>
        <!--<div class="text-center font-weight-bold">
        <a href="update.php" class="btn btn-sm btn-danger">Kembali</a>
        </div>-->
                </div>
<?php }?>
