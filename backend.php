<?php

    $send = filter_input(INPUT_POST, 'frmBannersEnviar', FILTER_SANITIZE_STRING);

    if($send){
        $matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
        $nome_img = $_FILES['img']['name'];
        
        $hostname_cfg = "localhost";
        $username_cfg = "root";
        $password_cfg = "";
        $database_cfg = "upload";

        try {
            $dbh = new PDO('mysql:host='.$hostname_cfg.';dbname='.$database_cfg, $username_cfg, $password_cfg);
            $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $dbh->exec("set names utf8");    
        } catch(PDOException $e){
            echo 'Não foi possível conectar ao banco de dados.';
            exit();
        }

        $stmt=$dbh->prepare("INSERT INTO foto_host (matricula, nome_img) VALUES (:matricula, :nome_img)");
        $stmt->bindParam(':matricula',$matricula);
        $stmt->bindParam(':nome_img',$nome_img);

        if($stmt->execute()) {
            $ultimo_id = $dbh->lastInsertId();
            
            //Diretorio para salvar o FILE
            $diretorio = 'imagens/';
            
            //Criar uma pasta com base em um diretorio
            //mkdir($diretorio, 0755);

            //Salvar a imagem do upload em um diretório com um nome específico
            move_uploaded_file($_FILES['img'] ['tmp_name'], $diretorio.$matricula.'.jpg');
        } else {
            echo 'Error 404';
        }

    } else {
        header("Location: index.php");
    }

?>