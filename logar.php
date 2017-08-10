<?php
    session_start();

    if (isset($_POST["login"])) {

        $mysqli = new mysqli("127.0.0.1", "root", "");
        $mysqli->select_db("eduardophotos");

        //select * from usuarios where login = 'rafael';
        
        if ($resultado = $mysqli->query("SELECT * FROM usuarios where login = '".$_POST["login"]."';")) {
            $usuario = $resultado->fetch_assoc();

            if (md5($_POST["senha"]) == $usuario["senha"]) {
                if ($usuario["ativo"]) {

                    $_SESSION["usuario"] = $usuario;
                    header("location: fotos.php"); 
                    
                } else {
                    echo  "USUARIO ".strtoupper($usuario["nome"])." BLOQUEADO!";
                }
            } else {
                echo "SENHA INCORRETA.";
            }

            $resultado->close();
        } else {
            echo "USUÁRIO NÃO ENCONTRADO NO BANCO DE DADOS.";
        }
        $mysqli->close();
    }
    //header("location: index.html");
?>