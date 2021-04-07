<?php
    require_once 'app/_config.php';
    require_once 'app/Database.php';

    $db = new Database;
    $mahasiswa = $db->queryResult('SELECT * FROM mahasiswa');
    // var_dump($mahasiswa->nama);
    // exit;

    // Fitur Tambah data
    if (isset($_POST['button_submit'])) {

        $input_nim = $_POST['nim'];
        $input_nama = $_POST['nama'];
        $input_prodi = $_POST['prodi'];
        $query = "INSERT INTO `mahasiswa` 
                    (`id`, `nim`, `nama`, `prodi`) 
                VALUES (NULL, '$input_nim', '$input_nama', '$input_prodi')";
        if ($db->queryInsert($query) > 0) {
            header('Location: '.BASE_URL.'/');
        }
        
    }

    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Pertemuan 5 PDO</title>
</head>
<body>
    <div class="container py-5">
        <h1 class="mb-5">Data mahasiswa</h1>
        
        <div class="row">
            <div class="col-lg-6">
                <h4>Form Tambah Mahasiswa</h4>
                <form action="" method="POST" class="mb-5">
                    <input type="text" class="form-control mb-1" name="nim" placeholder="Nim">
                    <input type="text" class="form-control mb-1" name="nama" placeholder="Nama">
                    <input type="text" class="form-control mb-1" name="prodi" placeholder="Prodi">

                    <button type="submit" name="button_submit" class="btn btn-primary mt-3">Tambahkan</button>
                </form>
            </div>
        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($mahasiswa as $mhs): ?>
                    <tr>
                        <td><?= $mhs->nim ?></td>
                        <td><?= $mhs->nama ?></td>
                        <td><?= $mhs->prodi ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>