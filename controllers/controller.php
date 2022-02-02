<?php
class MvcController{
    public function plantilla(){
        include "interfaces/template.php";
    }
    public function enlacesPagControl(){
        if(isset($_GET['action'])){
            $enlacesController=$_GET['action'];
        }else {
            $enlacesController = "home.php";
        }
        $respuesta = enlacesPag::enlacesPagModel($enlacesController);
        include $respuesta;
    }
}
?>