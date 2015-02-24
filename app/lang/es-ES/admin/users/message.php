<?php

return array(

    'user_exists'              	=> 'El Usuario ya existe!',
    'user_not_found'           	=> 'Usuario [:id] no existe.',
    'user_login_required'      	=> 'El campo Usuario es obligatorio',
    'user_password_required'   	=> 'El password es obligatorio.',
    'insufficient_permissions' 	=> 'No tiene permiso.',
    'user_deleted_warning' 		=> 'Este usuario ha sido eliminado. Deberá restaurarlo para editarlo o asignarle nuevos Equipos.',


    'success' => array(
        'create'    => 'Usuario correctamente creado.',
        'update'    => 'Usuario correctamente actualizado.',
        'delete'    => 'Usuario correctamente eliminado.',
        'ban'       => 'Usuario correctamente bloqueado.',
        'unban'     => 'Usuario correctamente desbloqueado.',
        'suspend'   => 'Usuario correctamente suspendido.',
        'unsuspend' => 'Usuario correctamente no suspendido.',
        'restored'  => 'Usuario correctamente restaurado.',
+       'import'    => 'Users imported successfully.',
    ),

    'error' => array(
        'create' => 'Ha habido un problema creando el Usuario. Intentalo de nuevo.',
        'update' => 'Ha habido un problema actualizando el Usuario. Intentalo de nuevo.',
        'delete' => 'Ha habido un problema eliminando el  Usuario. Intentalo de nuevo.',
        'unsuspend' => 'Ha habido un problema marcando como no suspendido el Usuario. Intentalo de nuevo.',
        'import'    => 'There was an issue importing users. Please try again.',
    ),

);
