<?php
#ejemplode.com
$archivo = file_get_contents("archivo.txt"); //Guardamos archivo.txt en $archivo
$archivo = ucfirst($archivo); //Le damos un poco de formato
$archivo = nl2br($archivo); //Transforma todos los saltos de linea en tag <br/>
echo "<strong>Archivo de texto archivo.txt:</strong> ";
echo $archivo;
?>
