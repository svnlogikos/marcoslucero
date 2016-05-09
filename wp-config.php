<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'marcoslucero');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'b}&}_^ .SD-./6YIg+:P#l73ul1o!w/k:=hD0RqKF$3xO:zGCP)j9 -] pP>zeSH');
define('SECURE_AUTH_KEY', '-O7X/4TPk/(!!8hHC-wbT^zo~3G4Yy&f*.dy+|~)y{zH[PJ:Y?lR5LjI|UogjOd}');
define('LOGGED_IN_KEY', 'v?Yj>rv 2Q;AK_p@B@6&FQNO>`MC&g$Z-B7f#`3.LnuW{&bq/wzIrdl3QnbE^:^d');
define('NONCE_KEY', '{Bj%+Q!)hf:e/UQ osC*MQe5IzJhe8e*5I;=M%.b;vGn)D-o*Vs~Al_{Cqwq1_lF');
define('AUTH_SALT', '>J%AT?m/,}azr)0qj5l6+J[ppf#D$)74Iew,CP)Z35,{oPqTeCsw6uEz;9H6TR0v');
define('SECURE_AUTH_SALT', 'y.!h58mc8tA+?9>s^:g^nD#*&|Tq/p)U:.Q[%tUn)WYQ3sXbcWu~bRr`iL *8B0x');
define('LOGGED_IN_SALT', 'XQ;Ciay29C)!mt`T>*+5kW|`kwJjsN+=(-%IYgG%Gxs}yx5F0JMEIQDE&jGKdcdw');
define('NONCE_SALT', 'O)HJxs||`XE+#ifBMOHR!VVMNU@dHI[vDDl$z,z3u]=F.MKo[%hvxWlS8ga,DYAa');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'ml_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

