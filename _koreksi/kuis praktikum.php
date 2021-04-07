<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kuis 1</title>

</head>
<body>
    <?php
        echo "<table class='table table-hover table-bordered table-striped'>
                <thead>
                    <tr>
                        <td scope='col'>Nama</td>
                        <td scope='col'>Populasi</td>
                    </tr>
                </thead>
                <tbody>";
        
    #1. Buatlah sebuah variabel
        $data = ["Chicago, IL" => 2695598, 
                "Dallas, TX" => 1197816, 
                "Houston, TX" => 2100263, 
                "Los Angeles, CA" => 3792621, 
                "New York, NY" => 8175133, 
                "Philadelphia, PA" => 1526006, 
                "Phoenix, AZ" => 1445632, 
                "San Antonio, TX" => 1327407, 
                "San Diego, CA" => 1307402, 
                "San Jose, CA" => 945942];

    #2. Urutkan matriks tersebut berdasarkan jumlah populasi-nya dari yang terkecil ke yang terbesar.
        asort($data);

    #3. Tampilkan matriks yang telah diurutkan dalam bentuk tabel HTML hanya untuk wilayah yang memiliki populasi diatas 1,500,000.
        foreach($data as $key => $value) {
            if ($value > 1500000) {
                echo "<tr>
                        <td>" . $key . "</td>
                        <td>" . $value . "</td>
                    </tr>";
            }
        }

        echo "</tbody>
              </table>";
    ?>
</body>
</html>