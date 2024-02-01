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
    $tudrukud = array('mari', 'kati', 'juuli', 'kristi', 'linda','kristina','anne', 'liisa');
	//sorteerimine
	sort($tudrukud);
    echo "Tüdrukud: $tudrukud[0], $tudrukud[1], $tudrukud[2], $tudrukud[3], $tudrukud[4], $tudrukud[5], $tudrukud[6], $tudrukud[7] <br>";
    echo "Kolm esimest tüdrukut: $tudrukud[0] $tudrukud[1] $tudrukud[2]<br>";
    $randint = rand(0, 7);
    echo $tudrukud[$randint];
    ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
