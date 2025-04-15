<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/style.css">
    <title>DONA LURDES INC.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <?php 
    require "partes/cabecalho.php";
    ?>

    <?php 
    require "partes/carousel.php";
    ?>

    <div class="text-center text-white " style="margin:20vh;" >
        <h1 class="titulo">WELCOME TO DONA LURDES</h1>
    </div>

    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-md-4 text-center p-3" style=" background-color: white; margin: 3vw;">
            <a class="link-dark" href="" style="text-decoration:none;">
                <img src="img/hackerman.png" alt="" class="img-fluid">
                <h4 href="#">PROGRAMAÇÃO</h4>
            </a>
            </div>
            <div class="col-md-4 text-center p-3" style=" background-color: white; margin: 3vw;">
            <a class="link-dark" href="" style="text-decoration:none;">
                <img src="" alt="" class="img-fluid">
                <h4 href="#">IDIOMAS</h4>
            </a>
            </div>
            <div class="col-md-4 text-center p-3" style=" background-color: white; margin: 3vw;">
            <a class="link-dark" href="" style="text-decoration:none;">
                <img src="img/historia.png" alt="" class="img-fluid ">
                <h4 href="#">HISTÓRIA</h4>
            </a>
            </div>
            <div class="col-md-4 text-center p-3" style=" background-color: white; margin: 3vw;">
            <a class="link-dark" href="" style="text-decoration:none;">
                <img src="" alt="" class="img-fluid">
                <h4 href="#">FILMES</h4>
            </a>
            </div>
            
            <div class="col-md-4 text-center p-3" style=" background-color: white; margin: 3vw;">
                <a class="link-dark" href="games.php" style="text-decoration:none;">
                <img src="img/games.png" alt="" class="img-fluid">
                <h4 href="#">GAMES</h4>
            </a>
            </div>
        </div>
    </div>

    <?php 
    require "partes/rodape.php";
    ?>
</body>
</html>