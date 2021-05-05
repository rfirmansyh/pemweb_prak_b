<?php 
    require_once 'app/_config.php';

?>


<?php 
    $title = 'Tambah Data';
    require_once 'partials/header.php'; 
?>
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6">
                <h4>Form Tambah Mahasiswa</h4>
                <form action="" method="POST" class="mb-5">
                    <input type="text" class="form-control mb-1" name="nim" placeholder="Nim">
                    <input type="text" class="form-control mb-1" name="nama" placeholder="Nama">
                    <input type="text" class="form-control mb-4" name="prodi" placeholder="Prodi">

                    <a href="<?= BASE_URL ?>/index.php" class="btn btn-outline-secondary">Batal</a>
                    <button type="submit" name="button_submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>

<?php require_once 'partials/footer.php'; ?>