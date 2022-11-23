<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Universitario</title>
    <!--Bootstrap 5.1-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS personalizado-->
    <link href="css/estilosnuevos.css" rel="stylesheet">
</head>

<body>
    
    <main class="fondo">
        <div class="container">
            <div class="row">
                <header>
                    <h1 class="text-center row-sm-12 row-md-6">World Bank Group</h1>
                    <br><br>
                </header>
                <div class="col-sm-12 col-md-6">
                    <img class="img-fluid" align="center" src="./img/logoazul.jpeg">
                </div>
                <div class="col-sm-12 col-md-6">
                    <form name="formulario" method="POST" action="controlador.php">
                        <div><img class="img-fluid" align="center" src="./img/logobanco.jpeg"></div>
                        <div class="col-sm-12 col-md-6"><br>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="usuario" id="floatingInput" placeholder="usuario">
                                <label for="floatingInput">Usuario</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" name="pass" id="floatingPassword" placeholder="Contraseña">
                                <label for="floatingPassword">NIP</label>
                            </div>
                            <input type="submit" class="btn btn-dark btn-lg btn-block" name="btnIngresar" value="Entrar">
                        </div>
                    </form>
                </div>
            </div>
            <footer>
                <div class="divboton2">
                    <h5>Developed by</h5>
                    <h6>FCA-CI, UNACH</h6>
                </div>
            </footer>
            <!--Bootstrap JS-->
            <script src="js/bootstrap.bundle.min.js"></script>
            <!--JS personalizado-->
            <script src="js/main.js"></script>
        </div>
    </main>

</body>

</html>