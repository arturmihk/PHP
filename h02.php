<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <h1>Harjutused</h1>

    <?php
    /*See on kommentaar, mis on kirjutatud mitme rea kaupa
    h1.php
    Artur-Mihk Peterson
    29.01.2024


    */
    //aritmeetilised operaatorid
    $x = 8;
    $y = 2;
    $mm = 10;
    $kx = 3;
    $ky = 5;
    $kz = 4;
    
    $kP = $kx + $ky + $kz;
    $kS = $kx * $kz / 2; 
    $liitm = $x + $y;
    $lahut = $x - $y;
    $korru = $x * $y;
    $jagam = $x / $y;
    $jaak = $x % $y;
    $cm = $mm / 10;
    $m = $cm / 100;
    echo "Vastused: <br> $x + $y = $liitm,<br> $x - $y = $lahut,<br> $x x $y = $korru,<br> $x / $y = $jagam,<br>  $x / $y = $jagam jääk: $jaak";
    $teisendus1 = sprintf('<br> Millimeeteri teisendus meetriteks %0.2f cm', $cm);
    $teisendus2 = sprintf('<br> Millimeeteri teisendus meetriteks %0.2f m', $m);
    echo $teisendus1;
    echo $teisendus2;
    $kolmnurkP = sprintf('<br> Kolmnurga ümbermõõt on %d cm', $kP);
    $kolmnurkS = sprintf('<br> Kolmnurga pindala on %d cm²', $kS);
    echo $kolmnurkP, $kolmnurkS;
    ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
