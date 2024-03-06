<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP too asjandus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .jumbo {
            background-image: url('https://multimedia.andalucia.org/media/C1DF41C3E6EF456A8B4A9B4845C32593/img/7B2A371526454055A71AC38C335E1834/16-20_Puente_Romano_y_Mezquita_de_Cordoba_Cordoba.jpg?responsive');
            color: #fff;
            text-align: center;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;

        }
        .bi {
            font-size: 2rem;
            text-align: center;
        }
        
    </style>
</head>  
<body>

    <div class="container-fluid p-0">
        <div class="jumbotron jumbo mb-0">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand text-white fw-bold" href="#">Artur-Mihk Peterson</a>
                    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white fw-bold" href="too.php?leht=avaleht">Avaleht</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white fw-bold" href="too.php?leht=minust">Minust</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white fw-bold" href="too.php?leht=kontakt">Kontakt</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white fw-bold" href="too.php?leht=admin">Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <br>
            <div class="container">
                <h1 class="display-4 fw-bold">Praktika Hispaanias</h1>
                <p class="lead mb-5 fw-bold">Minu välispraktika HKHKs</p>    
            </div>
            <br>
        </div>
        <?php
    if(!empty($_GET['leht'])){
        $leht = htmlspecialchars($_GET['leht']);
        $lubatud = array('avaleht','admin','minust','kontakt');
        $kontroll = in_array($leht, $lubatud);
        if($kontroll==true){
            include($leht.'.php');
        } else {
            echo "<br>";
            echo 'Valitud lehte ei eksisteeri millegipärast, äkki panite VALE AADRESSI VÕI MIDAGI???';
        }
    }
    ?>
        <hr class="border-2 border-top" />
        <footer class="container">
        <div class="row justify-content-center">
        <div class="col-md-2">
            <i class="bi bi-facebook ms-5"></i>
            <p>&copy; 2021 Artur-Mihk Peterson, Inc. &middot;</p>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
