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
    $kataloog = 'failid'; // Define the directory at the top of your PHP code

    // Check if a file is uploaded
    if(!empty($_FILES['minu_fail']['name'])){
        $sinu_faili_nimi = $_FILES['minu_fail']['name'];
        $ajutine_fail= $_FILES['minu_fail']['tmp_name'];
        
        $faili_suurus = $_FILES['minu_fail']['size'];
        
        $faili_tyyp = $_FILES['minu_fail']['type'];
        if ($faili_tyyp=='image/jpg' || $faili_tyyp=='image/jpeg'){
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

    // Display uploaded images in columns
    $files = array_diff(scandir($kataloog), array('.', '..')); // remove '.' and '..' from the array
    $columnCount = 3; // change this to change the number of columns
    echo "<div class='row'>";
    foreach($files as $file) {
        if($file !== "." && $file !== "..") {
            echo "<div class='col-".(12/$columnCount)."'>";
            echo "<a href='".$kataloog."/".$file."' target='_blank'><img src='".$kataloog."/".$file."' class='img-thumbnail' style='width: 200px; height: 200px;'></a>";
            echo "</div>";
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