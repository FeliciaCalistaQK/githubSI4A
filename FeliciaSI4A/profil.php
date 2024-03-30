<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
</head>
<body>
    <?php
        echo "<h5>Selamat Datang</h5>";
    ?>
    <hr/>
    <?php
        for($a = 1;$a<=5;$a++){
            echo "<li>Item ke - " . $a . "</li>";
        }
    ?>
    <b>Halaman ini dapat diakses melalui http://localhost:8080/FeliciaSI4A/profil.php</b>
    <?php
        echo $_SERVER['HTTP_HOST'];
        var_dump($_SERVER);//khusus debugging buat ngecek codingan jalan apa nggak
        print_r($_SERVER)//khusus array
    ?>
</body>
</html>

