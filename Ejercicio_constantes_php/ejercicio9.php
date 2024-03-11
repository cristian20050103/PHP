<?php

define('CONFIGURACION', [
    'seguridad' => [
        'politica_contraseñas' => [
            'complejidad' => false, 
            'expiracion' => 90     
        ],
        'permisos' => [
            'lectura' => false,    
            'escritura' => false   
        ]
    ],
    'idioma_localizacion' => [
        'idioma_predeterminado' => 'es',         
        'formato_fecha' => 'dd/mm/yyyy',          
        'zona_horaria' => 'America/Bogota D.C'   
    ],

    'notificaciones' => [
        'correo' => [
            'activo' => false,        
            'frecuencia' => 'diarias'  
        ],
        'push' => [
            'activo' => false,                            
            'preferencias' => ['nuevos_mensajes', 'notificaciones_importantes'] 
        ]
    ],
]);

echo "Las seguridad tiene permisos de lectura: " . (isset(CONFIGURACION['seguridad']['politica_contraseñas']['complejidad']) && CONFIGURACION['seguridad']['politica_contraseñas']['complejidad'] === true ? 'sí' : 'no');

?>



