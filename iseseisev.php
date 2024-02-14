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
    <h1>Iseseisev asi</h1>
    <?php
    /*See on kommentaar, mis on kirjutatud mitme rea kaupa
    h1.php
    Artur-Mihk Peterson
    14.02.2024


    */
    echo "<h3>Lihtne tekst</h3>";
    echo '<br>Juhan Liiv, "Ääremärkused"';
    echo "<h3><br>Intress</h3>";
    $raha = 2000; 
    $intresss = 0.02;
    $n = 1;
    $aasta = 5;
    
    $kokku = $raha * pow((1 + $intresss/$n), $n*$aasta);
    
    echo "Viie aasta pärast on: " . $kokku . "€";
    echo "<h3><br>Loend</h3>";
    $number = 10;

    while ($number >= 1) {
        echo $number . "<br>";
        $number--;
    }
    echo "<h3><br>Jooksuajad</h3>";
    $nimed = array("Jüri", "Mari", "Kati", "Mati", "Juuli", "Maali");
    $ajad = array(11.5, 10.7, 9.5, 11.7, 10.2, 9.4);

    array_multisort($ajad, $nimed);

    for ($i = 0; $i < 3; $i++) {
    echo ($i+1) . ". Koht: " . $nimed[$i] . " Ajaga " . $ajad[$i] . "<br>";
    }
    ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
