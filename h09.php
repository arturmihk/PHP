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
    08.02.2024


    */
    function kasutajatervitus($nimi) {
        $nimi = strtolower($nimi);
        $nimi = ucfirst($nimi);
        echo "Tere, $nimi!";
    }
    function tappilisamine($sona) {
        $sona = strtoupper($sona);
        $sona = str_split($sona);
        return implode(".", $sona) . ".";
    }
    function pahasona($sonum) {
        $sonum = strtolower($sonum);
        $sonum = str_replace("noob", "****", $sonum);
        $sonum = str_replace("kurat", "****", $sonum);
        $sonum = str_replace("perse", "****", $sonum);
        return $sonum;
    }
    function genereeriEmail($enimi, $pnimi) {
        $search = array("ä", "ö", "ü", "õ", "Ä", "Ö", "Ü", "Õ");
        $replace = array("a", "o", "u", "o", "A", "O", "U", "O");
        $enimi = str_replace($search, $replace, $enimi);
        $pnimi = str_replace($search, $replace, $pnimi);
        $enimi = strtolower($enimi);
        $pnimi = strtolower($pnimi);
        return $enimi . "." . $pnimi . "@hkhk.edu.ee";
    }

    kasutajatervitus("aRtuR");
    echo "<br>";
    echo tappilisamine("stalker or sth");
    echo "<br>";
    echo pahasona("kurat, sa oled noob");
    echo "<br>";
    echo genereeriEmail("Artur-Mihk", "Peterson");
    ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
