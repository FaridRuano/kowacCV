<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kowac</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="icons/css/all.css">
    <section class="header">
        <nav>
            <a href="index.php?action=home"><img src="images/logoW.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php?action=stock">Stock</a></li>
                    <li><a href="index.php?action=pedidos">Pedidos</a></li>
                    <li><a href="index.php?action=progreso">Progreso</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        
    </section>
    
</head>
<body>

        
        <?php
            $mvc= new MvcController();
            $mvc->enlacesPagControl();
        ?>
    
    <section class="footer">
        <h4>
            Conoce mas
        </h4>
        <p>
            Sigue nuestras redes sociales para mas contenido
        </p>
        <div class= "incon">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-whatsapp"></i>
        </div>
    </section>
    <script src="js/menuSH.js"></script>
</body>
</html>