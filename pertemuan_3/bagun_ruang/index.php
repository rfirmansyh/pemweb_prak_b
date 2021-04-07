<?php

    // ini file kelas kalian
    require 'Kubus.php';
    
    // Variable yang berisi logic dari kelas bagun ruang yang kalian pilih,
    // disini contoh kubus, dimana kubus memiliki property/identitas yaitu 'panjang sisi'
    $kubus = new Kubus;
    $kubus->setSisi(4);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ganti Nim Kalian -->
    <title>182410102024</title>
</head>
<body>
    <!-- Ganti Nama kalian -->
    <h3>Rahmad Firmansyah</h3> 
    <!-- Ganti Bangun Ruang yg kalian pilih (contoh: Kubus) -->
    <h1>Bagun Ruang : Kubus</h1>

    <ul>
        <!-- Sesuai variabel kelas ruang bagun, dan method yang udah kalian buat (bisa bervariasi setiap orang) -->
        <!-- Contoh jika kalian menggunakan 'Balok' | echo($balok->getLuas()) -->
        <li>Panjang Sisi : <?php echo($kubus->getSisi()) ?></li>
        <li>Luas : <?php echo($kubus->getLuas()) ?></li>
        <li>Volume : <?php echo($kubus->getVolume()) ?></li>
    </ul>

</body>
</html>