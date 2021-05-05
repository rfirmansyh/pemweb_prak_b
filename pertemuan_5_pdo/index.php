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
        if ($db->queryRow($query) > 0) {
            header('Location: '.BASE_URL.'/');
            exit;
        }
        
    }

    
?>

<?php 
    $title = 'Data';
    require_once 'partials/header.php'; 
?>

<div class="container py-5">
    <div class="row">
        <div class="col"><h1 class="mb-5">Data mahasiswa</h1></div>
        <div class="col-auto">
            <a href="<?= BASE_URL ?>/create.php" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($mahasiswa as $mhs): ?>
                <tr>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->prodi ?></td>
                    <td style="width: 200px">
                        <a href="<?= BASE_URL ?>/edit.php?id=<?= $mhs->id ?>" class="btn btn-xs btn-outline-warning">edit</a>
                        <a href="" class="btn btn-xs btn-outline-danger">hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php require_once 'partials/footer.php'; ?>
