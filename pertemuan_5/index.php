<?php
    require_once 'app/_config.php';
    require_once 'app/Database.php';

    // $db =  new Database;
    $mahasiswa = $db->queryResult('SELECT * FROM mahasiswa');
    var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba Database</title>
</head>
<body>
    <a href="about.php">TO About Page</a>
</body>
</html>