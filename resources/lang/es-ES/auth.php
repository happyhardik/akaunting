<?php

return [

    'auth'                  => 'Autenticación',
    'profile'               => 'Perfil',
    'logout'                => 'Salir',
    'login'                 => 'Iniciar sesión',
    'forgot'                => 'Olvidado',
    'login_to'              => 'Inicia sesión para empezar',
    'remember_me'           => 'Recordarme',
    'forgot_password'       => 'Olvidé mi contraseña',
    'reset_password'        => 'Restablecer Contraseña',
    'change_password'       => 'Cambiar contraseña',
    'enter_email'           => 'Introduce tu dirección de correo',
    'current_email'         => 'Correo electrónico actual',
    'reset'                 => 'Resetear',
    'never'                 => 'nunca',
    'landing_page'          => 'Página de inicio',
    'personal_information'  => 'Información personal',
    'register_user'         => 'Registrar usuario',
    'register'              => 'Registrar',

    'form_description' => [
        'personal'          => 'El enlace de invitación se enviará al nuevo usuario, así que asegúrese de que la dirección de correo electrónico es correcta. Podrán introducir su contraseña.',
        'assign'            => 'El usuario tendrá acceso a las empresas seleccionadas. Puede restringir los permisos usando <a href=":url" class="border-b border-black">roles</a>.',
        'preferences'       => 'Seleccione el idioma por defecto del usuario. También puede establecer la página de destino después de que el usuario inicie sesión.',
    ],

    'password' => [
        'pass'              => 'Contraseña',
        'pass_confirm'      => 'Confirmación de contraseña',
        'current'           => 'Actual',
        'current_confirm'   => 'Confirmar contraseña',
        'new'               => 'Nueva contraseña',
        'new_confirm'       => 'Confirmar contraseña',
    ],

    'error' => [
        'self_delete'       => 'Error: No puede eliminarse usted mismo!',
        'self_disable'      => 'Error: ¡No puede desactivarse a usted mismo!',
        'no_company'        => 'Error: No hay compañías asignadas a su cuenta. Por favor contacte al administrador del sistema.',
    ],

    'login_redirect'        => '¡Verificación realizada! Estás siendo redirigido...',
    'failed'                => 'Estas credenciales no coinciden con nuestros registros.',
    'throttle'              => 'Demasiados intentos fallidos de inicio de sesión. Por favor vuelva a intentarlo después de %s segundos.',
    'disabled'              => 'Esta cuenta está inhabilitada. Por favor, póngase en contacto con el administrador del sistema.',

    'notification' => [
        'message_1'         => 'Ha recibido este correo porque hemos recibido una solicitud de recuperación de contraseña para su cuenta.',
        'message_2'         => 'Si no solicitó un restablecimiento de contraseña, no es necesaria ninguna acción de su parte.',
        'button'            => 'Restablecer Contraseña',
    ],

    'invitation' => [
        'message_1'         => 'Estás recibiendo este correo electrónico porque estás invitado a unirte a Nuaxa Network.',
        'message_2'         => 'Si no desea unirse, no se requiere ninguna acción adicional.',
        'button'            => 'Comenzar',
    ],

    'information' => [
        'invoice'           => 'Crea facturas fácilmente',
        'reports'           => 'Obtén reportes detallados',
        'expense'           => 'Rastrea cualquier gasto',
        'customize'         => 'Personaliza tu Nuaxa Network',
    ],

    'roles' => [
        'admin' => [
            'name'          => 'Administrador',
            'description'   => 'Obtendrán acceso total a Nuaxa Network incluyendo clientes, facturas, informes, ajustes y aplicaciones.',
        ],
        'manager' => [
            'name'          => 'Gerente',
            'description'   => 'Obtendrán acceso total a tu Nuaxa Network, pero no pueden administrar usuarios y aplicaciones.',
        ],
        'customer' => [
            'name'          => 'Cliente',
            'description'   => 'Pueden acceder al Portal del Cliente y pagar sus facturas en línea a través de los métodos de pago que usted haya establecido.',
        ],
        'accountant' => [
            'name'          => 'Contador',
            'description'   => 'Pueden acceder a facturas, transacciones, informes y crear entradas en el registro.',
        ],
        'employee' => [
            'name'          => 'Empleado',
            'description'   => 'Pueden crear reclamaciones de gastos y rastrear el tiempo para los proyectos asignados, pero sólo pueden ver su propia información.',
        ],
    ],

];
