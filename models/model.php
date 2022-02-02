<?php
class enlacesPag{
    public static function enlacesPagModel($enlacesModel){
        if($enlacesModel == "stock" || 
         $enlacesModel == "pedidos" ||
         $enlacesModel == "progreso") 
         {
             $module="interfaces/".$enlacesModel.".php";
         }else if($enlacesModel=="home")
         {
            $module="interfaces/home.php";
         }else {
            $module="interfaces/home.php";
         }
         return $module;
             
    }
}
?>