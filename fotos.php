<?php
    session_start();

    if (!isset($_SESSION["usuario"])) {
        header("location: index.html");
    }

    $nome_usuario = $_SESSION["usuario"]["nome"];

    /*echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";*/
?>

<html>
    <head>
        <title>Eduardo Photos</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/application.css">
    </head>
    <body>
        <div class="container">
            <h1>Fotos de <?= $nome_usuario ?></h1>

            <div class="row">
                <div class="col">
                    <img src="fotos/foto-01.jpg" alt="" class="img-thumbnail"> 
                </div>
                <div class="col">
                    <img src="fotos/foto-02.jpg" alt="" class="img-thumbnail"> 
                </div>
                <div class="col">
                    <img src="fotos/foto-03.jpg" alt="" class="img-thumbnail"> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="fotos/foto-04.jpg" alt="" class="img-thumbnail"> 
                </div>
                <div class="col">
                    <img src="fotos/foto-05.jpg" alt="" class="img-thumbnail"> 
                </div>
                <div class="col">
                    <img src="fotos/foto-06.jpg" alt="" class="img-thumbnail"> 
                </div>
            </div>

            <br>
            <br>
            <form action="sair.php">
                    <button type="submit" class="btn btn-danger">Sair</button>
            </form>
       </div>
    </body>
</html>