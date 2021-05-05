<?php
    require_once 'app/_config.php';
    require_once 'app/Database.php';
    require_once 'app/FlashAlert.php';

    $id = $_GET['id'];
    $db = new Database;
    $mahasiswa = $db->queryResultOne('SELECT * FROM mahasiswa WHERE id = '.$id);
    
    // Fitur Tambah data
    if (isset($_POST['button_submit'])) {

        $input_nim = $_POST['nim'];
        $input_nama = $_POST['nama'];
        $input_prodi = $_POST['prodi'];
        $query = "UPDATE `mahasiswa` 
                    SET `nim` = '$input_nim', `nama` = '$input_nama', `prodi` = '$input_prodi' 
                    WHERE `mahasiswa`.`id` = $id";
        if ($db->queryRow($query) > 0) {
            FlashAlert::setFlash('Update Data', 'Update Data Berhasil', 'success');
            header('Location: '.BASE_URL.'/edit.php?id='.$id);
            die;
        } else {
            FlashAlert::setFlash('Update Data', 'Update Data Tidak Berhasil', 'warning');
            header('Location: '.BASE_URL.'/edit.php?id='.$id);
            die;
        }
        
    }

    
?>


<?php 
    $title = 'Ubah Data';
    require_once 'partials/header.php'; 
?>

<div class="container pt-5">
    <?php FlashAlert::flash(); ?>
    <div class="row">
        <div class="col-lg-6">
            <h4>Form Ubah Mahasiswa</h4>
            <form action="" method="POST" class="mb-5">
                <input type="text" class="form-control mb-1" name="nim" placeholder="Nim" value="<?= $mahasiswa->nim ?>">
                <input type="text" class="form-control mb-1" name="nama" placeholder="Nama" value="<?= $mahasiswa->nama ?>">
                <input type="text" class="form-control mb-4" name="prodi" placeholder="Prodi" value="<?= $mahasiswa->prodi ?>">

                <a href="<?= BASE_URL ?>/index.php" class="btn btn-outline-secondary">Batal</a>
                <button type="submit" name="button_submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'partials/footer.php'; ?>