<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Cifras de Vigenère</title>
</head>
<body style="background-color: #CDFFD1">
    <br>

    <form method="post">
        <div class="d-flex justify-content-center">
            <div class="w-50 p-3">
                <?php include '../include/botao_voltar.php' ?>
                <p></p>
                <div class="card container">
                    <div class="container">
                        <h3 class="text-center">Cifras de Vigenère</h3>
                        
                        <hr>

                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Digite um palavra:</label>
                                <input type="text" class="form-control col-sm-8" name="cript" required><br/>
                            </div>

                            <div class="col">
                                <label for="" class="form-label">Digite uma chave:</label>
                                <input type="text" class="form-control col-sm-2" name="chave" min="0" max="9" required><br/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="submit" name="cript_result" class="btn btn-primary" value="Criptografar">
                                <input type="submit" name="descript_result" class="btn btn-success" value="Descriptografar">
                            </div>
                        </div>

                        <br/>

                        <div class="text-center">
                            <?php 
                                include 'criptografar.php';
                                include 'descriptografar.php';
                            ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="text-success">
        <?php include '../include/footer.php' ?>
    </div>
    
</body>
</html>