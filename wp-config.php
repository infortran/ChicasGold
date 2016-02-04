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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY', 'Rl8}, h:[vI._K]1m]hIt?g_Zdx@GGQTJR?;>Lzo}|l2k[XMZeMMV-4/>p`bY !P');
define('SECURE_AUTH_KEY', '/Ji1ngNdRCk2eas.S*C0|MJC$R*vqV<c{5fCzQB3Qp90rCxH!iz^Gnl/J,}M80iH');
define('LOGGED_IN_KEY', 'mkAJZ])eJU5!`|^&<fT>8fU`wf>8}!h0k3PA#[!/;C2>Cl;0#8oFT]@)ST!Ge@5=');
define('NONCE_KEY', 'C0Ey:>)FftzL>W;Tk^)p<V5^C:@9Gy2]7-_I;MEpEXF@t/0%J)i9, uj U-1Vox=');
define('AUTH_SALT', '*D=J_*{rOmO$e_N|U}RC8w@#8^ZAw?%RmV<C9BAu/XNiZLB354%lKEQTa-rNJ`AB');
define('SECURE_AUTH_SALT', '%:+YZ %V+i]*H:nU*BqF67#Z@@}7C0Fvik{PU^_V.wV&^K4i{1%lPfh}db*K5fT7');
define('LOGGED_IN_SALT', '1]&Hb+|m}_7)N:*1QCW?ViTMwt~m?W=@5Id1W}Gq _pF;x,Z~>y=iWWCj0H1~v*`');
define('NONCE_SALT', 'iuii$fn`?1e/y.54I5z%5lTCU~4UhoW4HgG^Ze*`vfAeoMnVOO!0}YvREpT7C8En');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

