<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .image-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .image-row a {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
    <h1>Harjutused</h1>
    <?php
    // Check if a file is uploaded
    if(!empty($_FILES['minu_fail']['name'])){
        $sinu_faili_nimi = $_FILES['minu_fail']['name'];
        $ajutine_fail= $_FILES['minu_fail']['tmp_name'];
        
        $faili_suurus = $_FILES['minu_fail']['size'];
        
        $faili_tyyp = $_FILES['minu_fail']['type'];
        if ($faili_tyyp=='image/jpg' || $faili_tyyp=='image/jpeg'){
            $kataloog = 'failid';
            $faili_koht = $kataloog.'/'.$sinu_faili_nimi;    //kontrollitava faili asukoht ja nimi
            
            if(!file_exists($faili_koht) && move_uploaded_file($ajutine_fail, $kataloog.'/'.$sinu_faili_nimi)){
                echo 'Faili üleslaadimine oli edukas <br>';    
            } else {
                echo 'Faili üleslaadimine ebaõnnestus <br>';
            }
        } else {
            echo 'Faili ei laetud üles!';    
        }
    }

    // Display uploaded images
    echo "<div class='image-row'>";
    $files = scandir($kataloog);
    foreach($files as $file) {
        if($file !== "." && $file !== "..") {
            echo "<a href='".$kataloog."/".$file."' target='_blank'><img src='".$kataloog."/".$file."' width='200' height='200'></a>";
        }
    }
    echo "</div>";
    ?>

    <!-- HTML form for uploading the image -->
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="minu_fail" accept=".jpg" />
        <input type="submit" value="Upload" />
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>