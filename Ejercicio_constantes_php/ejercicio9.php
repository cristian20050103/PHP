<?php define('CONFIG', ['seguridad'=>['politica_contraseñas'=>['expiracion'=>90],'permisos'=>['lectura'=>0,'escritura'=>0]],'idioma_localizacion'=>['idioma_predeterminado'=>'fr','formato_fecha'=>'dd/mm/yyyy','zona_horaria'=>'America/Medellin'],'notificaciones'=>['correo'=>['activo'=>0,'frecuencia'=>'diarias'],'push'=>['activo'=>0,'preferencias'=>['nuevos_mensajes','notificaciones_importantes']]]]);
echo "La notificaciones tienes una frecuencia de: " . CONFIG['seguridad']['politica_contraseñas']['expiracion']; ?>





