<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'dbmagister');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   if (mysqli_connect_errno()) {
      die("Error de conexión a la base de datos: " . mysqli_connect_error());
  }
  
  function verificar_datos($filtro,$cadena){
   if(preg_match("/^".$filtro."$/",$cadena)){
       return false;
   }else{
       return true;
   }
}


#limpiar los espacios que hay en cadenas de texto
function limpiar_cadena($cadena){
   $cadena=trim($cadena);
 $cadena=stripslashes($cadena);
 $cadena=str_ireplace("<script>", "", $cadena);
 $cadena=str_ireplace("</script>", "", $cadena);
 $cadena=str_ireplace("<script src", "", $cadena);
 $cadena=str_ireplace("<script type=", "", $cadena);
 $cadena=str_ireplace("SELECT * FROM", "", $cadena);
 $cadena=str_ireplace("DELETE FROM", "", $cadena);
 $cadena=str_ireplace("INSERT INTO", "", $cadena);
 $cadena=str_ireplace("DROP TABLE", "", $cadena);
 $cadena=str_ireplace("DROP DATABASE", "", $cadena);
 $cadena=str_ireplace("TRUNCATE TABLE", "", $cadena);
 $cadena=str_ireplace("SHOW TABLES;", "", $cadena);
 $cadena=str_ireplace("SHOW DATABASES;", "", $cadena);
 $cadena=str_ireplace("<?php", "", $cadena);
 $cadena=str_ireplace("?>", "", $cadena);
 $cadena=str_ireplace("--", "", $cadena);
 $cadena=str_ireplace("^", "", $cadena);
 $cadena=str_ireplace("<", "", $cadena);
 $cadena=str_ireplace("[", "", $cadena);
 $cadena=str_ireplace("]", "", $cadena);
 $cadena=str_ireplace("==", "", $cadena);
 $cadena=str_ireplace(";", "", $cadena);
 $cadena=str_ireplace("::", "", $cadena);
 $cadena=trim($cadena);
 $cadena=stripslashes($cadena);
 return $cadena;
}

#funcion renombrar fotos
?>