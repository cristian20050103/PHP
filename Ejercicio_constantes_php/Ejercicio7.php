<?php

define('CODIGOS_DE_ERROR', ["error_de_conexion>"=>"el navegador no puede establecer una conexión",
"error_de_lectura_archivo"=>"el navegador no puede leer el archivo",
"error_de_sintaxis"=>"el navegador incontro un error de sintaxis ",
"error_ingreso_BBDD"=>"el navegador no pudo acceder a la BBDD"]);
echo "¡¡¡ERROR!!! " .CODIGOS_DE_ERROR["error_de_sintaxis"];


?>