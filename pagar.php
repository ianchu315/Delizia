<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heladeria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="nav">

        <a href="inicio.html" class="titulo">Delizia</a>

        <div class="cerrar_se">
            <a class="a" href="login.html"><img src="img/boton.png" alt="boton">Cerrar sesión</a>
        </div>

        <div class="selecciones">
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <a href="restaurantes.html">Restaurantes</a>
            </button>
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <a href="heladeria.html">Heladeria</a>

            </button>
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <a href="cafeteria.html">Cafeteria</a>
            </button>
        </div>

    </header>
    
    <div style="display: flex; justify-content: center;">
        <div style="width: 50%;">

            <div class="container mt-5 justify-content-center text-center">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Pedido</h2>
                        <p id="pedidos">pedidos</p>
                        <h2 class="card-title">Precio total</h2>
                        <p id="precio">Precio</p>
                        <button class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
            <?php

            // if(isset($_POST["comida"])){
            //     echo "<h5>Comida</h5>";
            //     $con = 0;
            //     if(count($_POST["comida"])){
            //         foreach($_POST["comida"] as $value){
            //             $nombre = $_POST["nombres"][$con];
            //             echo $nombre;
            //             echo " - $value <br/>";
            //             $con += 1;
            //         }
            //     }
            // }else{
            //     echo "<h5>Comida</h5>";
            //     echo "No se ha seleccionado ningun elemento <br/>";
            // }

            // if(isset($_POST["bebida"])){
            //     echo "<br/><h5>Bebida</h5>";
            //     $con = 0;
            //     if(count($_POST["bebida"])){
            //         foreach($_POST["bebida"] as $value){
            //             $nombre = $_POST["nombres2"][$con];
            //             echo $nombre;
            //             echo " - $value <br/>";
            //             $con += 1;
            //         }
            //     }
            // }else{
            //     echo "<h5>Bebida</h5>";
            //     echo "No se ha seleccionado ningun elemento <br/>";
            // }
            
            // $total = 0;
            // $total = $_POST["total"];
            // echo "<br/><h5>Total a pagar</h5>";
            // echo "$total <br/> ";
        ?>
        </div>
    </div>

    <br>
    <br>
    <br>

    <footer>
        Delizia &copy; 2024 - Todos los derechos reservados
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
    <script src="./prueba.js"></script>

</body>
</html>