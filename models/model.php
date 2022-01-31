<?php
class enlacesPag{
    public static function enlacesPagModel($enlacesModel){
        if($enlacesModel == "stock" || 
         $enlacesModel == "pedidos" ||
         $enlacesModel == "progreso") 
         {
             $module="views/interfaces/".$enlacesModel.".php";
         }else if($enlacesModel=="principal")
         {
            $module="views/principal.php";
         }else {
            $module="views/principal.php";
         }
         return $module;
             
    }
}
?>