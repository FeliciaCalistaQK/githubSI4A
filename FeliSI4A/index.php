<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title> Pertemuan 13</title>
</head>
<body>
    <h1>Perhitungan Factorial</h1>
    <?php
    function factorial($n){
        if($n == 0)
        return 1;
    return $n*factorial($n-1);
    }

    
    $num = 5;
    echo "Factorial of ",$num," is ",factorial($num);
    ?>
</body>
</html>