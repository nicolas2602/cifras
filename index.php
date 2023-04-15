<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Cifras</title>
</head>
<body style="background-color: Cornsilk">

    <br/>

    <div class="d-flex justify-content-center">
        <div class="row">
            <hr>
            <h2 class="text-center">Cifras</h2>
            <hr>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/julio_cesar.jpg" class="card-img-top" alt="Júlio César">
                    <div class="card-body">
                        <h5 class="card-title">Cifras de César</h5>
                        <p class="card-text">A cifra mais antiga e simples, criada por Júlio César.</p>
                        <a href="cifras_cesar/cifras_cesar.php" class="btn btn-primary">Entrar</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/vigenere_1.jpg" class="card-img-top" alt="Júlio César">
                    <div class="card-body">
                        <h5 class="card-title">Cifras de Vigenère</h5>
                        <p class="card-text">Baseada nas Cifras de César e simples, foi criada por Blaise de Vigenère.</p>
                        <a href="cifras_vigenere/cifras_vigenere.php" class="btn btn-success">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br/>
    <?php include 'include/footer.php'; ?>
</body>
</html>