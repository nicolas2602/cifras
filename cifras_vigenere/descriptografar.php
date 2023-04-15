<?php

    function descriptografar($palavra, $key){
        $letra = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $i = 0;
        $k = 0;
        $letra_descript = "";

        while($i < strlen($palavra)){

            while($k < strlen($key)){
                $indice_palavra = strpos($letra, $palavra[$i]);
                $indice_chave = strpos($letra, $key[$k]);
                $descriptografar = ($indice_palavra + $indice_chave) % strlen($letra);
                $letra_descript .= $letra[$descriptografar];

                $k++;
            }
            
            $i++;
        }

        return $letra_descript;
    }

    if(isset($_POST['descript_result'])){
        $nome = $_POST['cript'];
        $chave = $_POST['chave'];

        if((!preg_match('/^[A-Z 0-9]*$/', $nome)) || (!preg_match('/^[A-Z 0-9]*$/', $chave))){
            include '../include/alerta_erro.php';
        }else{

            if(strlen($nome) != strlen($chave)){
                include '../include/alerta_erro3.php';
            }else{
                echo 
                "<div class='alert alert-primary' role='alert'>
                    Descriptografia: ".descriptografar($nome, $chave).
                "</div>";
            }
        }
    }

?>