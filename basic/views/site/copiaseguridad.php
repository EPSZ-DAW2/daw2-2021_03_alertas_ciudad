<br>
<?php
$db = require __DIR__ . '../../../config/db_orig.php';

//Introduzca aquí la información de su base de datos y el nombre del archivo de copia de seguridad.
$mysqlDatabaseName ='daw2_alertas';
$mysqlUserName =$db['username'];
$mysqlPassword =$db['password'];
$mysqlHostName ='127.0.0.1';
$mysqlExportPath ='copiaseguridaddaw2.sql';


$command='mysqldump --user='.$mysqlUserName. '--password='.$mysqlPassword. '--host='.$mysqlHostName. ''.$mysqlDatabaseName.' > '.$mysqlExportPath;
//$command='mysqldump ' .$mysqlDatabaseName .' > ' .$mysqlExportPath;
exec($command,$output,$worked);
var_dump($output);
switch($worked){
case 0:
echo 'La base de datos <b>' .$mysqlDatabaseName .'</b> se ha almacenado correctamente en la siguiente ruta '.getcwd().'/' .$mysqlExportPath .'</b>';
break;
case 1:
echo 'Se ha producido un error al exportar <b>' .$mysqlDatabaseName .'</b> a '.getcwd().'/' .$mysqlExportPath .'</b>';
break;
case 2:
echo 'Se ha producido un error de exportación, compruebe la siguiente información: <br/><br/><table><tr><td>Nombre de la base de datos:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b>NOTSHOWN</b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>' .$mysqlHostName .'</b></td></tr></table>';
break;
}

?>