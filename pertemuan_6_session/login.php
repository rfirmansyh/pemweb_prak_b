<?php

    if (!isset($_SESSION)) {
        session_start();
    }
    
    if ( isset($_POST['button_submit']) ) {
        $input_name = $_POST['username'];
        $_SESSION['user_logged_in'] = [
            'name' => $input_name
        ];
        header("Location: dashboard.php");
        exit;
    }


    // if ( isset($_SESSION['petugas']) ) {
    //     var_dump($_SESSION);
    // } 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <div class="container pt-5">
        <h1>Login Page</h1>
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="POST">
                    <input 
                        type="text" 
                        name="username" 
                        class="form-control mb-1" placeholder="Masukan Nama">
                    <input 
                        type="password" 
                        name="password" 
                        class="form-control" placeholder="Masukan Password">
                    <button type="submit" name="button_submit" class="btn btn-primary mt-2">
                        Login
                    </button>
                </form>
            </div>
        </div>
    
    </div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>