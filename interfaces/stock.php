<!DOCTYPE html>
<html>

<body>
    <?php
    session_start();
    $logueado = 0;
    if (!empty($_SESSION['username'])) {
        $logueado = 1;
        $username = $_SESSION['username'];
    }
    ?>
    <div class="text-box">
        <h1>
            STOCK
        </h1>
        <p>
            STOCK
        </p>
        <?php
        if ($logueado == 0) {

            echo "<a class=\"hero-btn\" onclick=\"abrirLogin();\" style=\"width:260px\">Iniciar Sesión</a></br></br>";
        }
        if ($logueado == 1) {
            echo "<a href=\"models/salir.php\" class=\"hero-btn\" style=\"width:270px\">Cerrar Sesión</a></br></br>";
        }
        ?>
        <a href="" class="hero-btn" onclick=window.location.href="https://www.instagram.com/kowac.ec/">Visita nuestro Instagram</a>


    </div>
    <script>
        function abrirLogin() {
            window.open("index.php?action=login", "_self");
            
        }
    </script>
</body>

</html>