<?php

    function descriptografar($palavra, $key){
        $letra = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $i = 0;
        $letra_descript = "";

        while($i < strlen($palavra)){

            $indice = strpos($letra, $palavra[$i]);
            $criptografar = ($indice - $key) % strlen($letra);
            $letra_descript .= $letra[$criptografar];
                
            $i++;
        }

        return $letra_descript;
    }

    if(isset($_POST['descript_result'])){
        $nome = $_POST['cript'];
        $chave = $_POST['chave'];

        if(!preg_match('/^[A-Z 0-9]*$/', $nome)){
            include '../include/alerta_erro.php';
        }else{

            if($chave < 0 || $chave > 9){
                include '../include/alerta_erro2.php';
            }else{
                echo 
                "<div class='alert alert-primary' role='alert'>
                    Descriptografia: ".descriptografar($nome, $chave).
                "</div>";
            }
        }
    }

?>