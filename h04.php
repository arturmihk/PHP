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
    <h1 class="mb-5">Harjutused</h1>
    <?php
    /*See on kommentaar, mis on kirjutatud mitme rea kaupa
    h1.php
    Artur-Mihk Peterson
    29.01.2024

    */
    ?>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <form action="h04.php" method="get">
                <h3>jagamine</h3>
                Arv 1 <input type="text" name="arv1"><br>
                Arv 2 <input type="text" name="arv2"><br>
                <input type="submit" value="Arvuta">
                <div class="alert alert-danger" role="alert">Palun täitke mõlemad lahtrid!</div>
            </form>
            
            <?php
    if (isset($_GET['arv1']) && $_GET['arv1'] !== '' && isset($_GET['arv2']) && $_GET['arv2'] !== '') {
        $arv1 = $_GET['arv1'];
        $arv2 = $_GET['arv2'];
        if ($arv2 == 0) {
            echo "Nulliga ei saa jagada";
        }
        if ($arv1 == 0) {
            echo "Nulliga ei saa jagada";
        }
         else {
            $jagatis = $arv1 / $arv2;
            echo "$arv1 / $arv2 = $jagatis";
        }
    }
      ?>
      </div>
            <div class="col">
            <form action="h04.php" method="get">
                <h3>vanus</h3>
                Vanus 1 <input type="text" name="van1"><br>
                Vanus 2 <input type="text" name="van2"><br>
                <input type="submit" value="Arvuta">
                <div class="alert alert-danger" role="alert">Palun täitke mõlemad lahtrid!</div>
            </form>
            <?php
            if (isset($_GET['van1']) && $_GET['van1'] !== '' && isset($_GET['van2']) && $_GET['van2'] !== '') {
                  $van1 = $_GET['van1'];
                  $van2 = $_GET['van2'];
              if ($van1 > $van2) {
                  echo "Esimene inimene on vanem";
              } elseif ($van1 < $van2) {
                  echo "Teine inimene on vanem";
              } else {
                  echo "Mõlemad on sama vanad";
              }
            }
            ?>
            </div>
            <div class="col">
            <form action="h04.php" method="get">
                <h3>Ristkülik või ruut</h3>
                Külg 1 <input type="text" name="kulg1"><br>
                Külg 2 <input type="text" name="kulg2"><br>
                <input type="submit" value="Arvuta">
                <div class="alert alert-danger" role="alert">Palun täitke mõlemad lahtrid!</div>
            </form>
            <?php
            if (isset($_GET['kulg1']) && $_GET['kulg1'] !== '' && isset($_GET['kulg2']) && $_GET['kulg2'] !== '') {
                $kulg1 = $_GET['kulg1'];
                $kulg2 = $_GET['kulg2'];
            if ($kulg1 == $kulg2) {
                echo "Ruut";
            } else {
                echo "Ristkülik";
            }
        }
        ?>    
            </div>
            <div class="col">
            <form action="h04.php" method="get">
                <h3>Ristkülik või ruut II</h3>
                Arv 1 <input type="text" name="arv1"><br>
                Arv 2 <input type="text" name="arv2"><br>
                <input type="submit" value="Arvuta">
                <div class="alert alert-danger" role="alert">Palun täitke mõlemad lahtrid!</div>
            </form>
            </div>
            <div class="col">
            <form action="h04.php" method="get">
                <h3>Juubel</h3>
                Arv 1 <input type="text" name="arv1"><br>
                Arv 2 <input type="text" name="arv2"><br>
                <input type="submit" value="Arvuta">
                <div class="alert alert-danger" role="alert">Palun täitke mõlemad lahtrid!</div>
            </form>
            </div>
            <div class="col">
            <form action="h04.php" method="get">
                <h3>Hinne</h3>
                Arv 1 <input type="text" name="arv1"><br>
                Arv 2 <input type="text" name="arv2"><br>
                <input type="submit" value="Arvuta">
                <div class="alert alert-danger" role="alert">Palun täitke mõlemad lahtrid!</div>
            </form>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
