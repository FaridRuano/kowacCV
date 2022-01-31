<!DOCTYPE html>
<html>
<head>
    <title>KOWAC</title>
    <link rel="shortcut icon" href="/images/logo.ico"/>
    <link rel="stylesheet" href="estilos.css">
    <div class="page">
        <div class="navbar">
            
            <a href="index.php?action=principal"  class="logo">
            <img src="images/logoW.png" width="200px" height="200px">
            </a>           
            <ul>
                <li><a href="index.php?action=stock">Stock</a></li>
                <li><a href="index.php?action=pedidos">Pedidos</a></li>
                <li><a href="index.php?action=progreso">Progreso</a></li>
                
            </ul>
        </div>
    </div>
</head>
<body></body>
    <section>
        <?php

        $mvc= new MvcController();
        $mvc->enlacesPagControl();

        
        ?>
    </section>
    
</body>
</html>