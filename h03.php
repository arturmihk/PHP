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
    <form action="h03.php" method="get">
        Trapetsi 1. alus <input type="text" name="t1"><br>
        Trapetsi 2. alus <input type="text" name="t2"><br>
        Trapetsi kõrgus <input type="text" name="t3"><br>
        Rombi külg <input type="text" name="t4"><br>
        <input type="submit" value="Arvuta">
    </form>
    <?php
    /*See on kommentaar, mis on kirjutatud mitme rea kaupa
    h1.php
    Artur-Mihk Peterson
    29.01.2024
    

    */
    if (isset($_GET['t1'], $_GET['t2'], $_GET['t3'], $_GET['t4'])) {
    $toode1 = $_GET['t1'];
    $toode2 = $_GET['t2'];
    $toode3 = $_GET['t3'];
    $toode4 = $_GET['t4'];
    printf  ("Trapetsi pindala on: %0.1f cm² <br>", ($toode1 + $toode2) / 2 * $toode3);
    printf  ("Rombi ümbermõõt on: %0.1f cm <br>", $toode4 * 4);
    }
    ?>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
