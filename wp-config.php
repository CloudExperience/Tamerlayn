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
define('DB_NAME', 'tamerlayn');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '127.0.0.1');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'B]:}t@C9n3T54u^68jY:!6p%I2WPhQiu>Q.HI[#NKrC72:[$z3zOh8snPX)Ww}99'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'L@{6D{vf(RgiK6$BsTZj3<slElyZc0pl2e1[nWepK Mu;_A3yik[FPYN;8H(GgMg'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'rd/vHnDAHx#8#.}|NVny$aQd0oI*C4{Mpe $}HJYKk:/bchJ<R8 5yLoKwS$/uyY'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '*9*{TNLP=~Vuw6E=3EFV$_%f,G,;LgL#=&(&cS<[.s(Ab@#:a`9`Vi`p1uPZX;>$'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'Yg@{ZKZG%q%s..Z%^ELI{NMst1hH:PFR`v~i:#)42%zU*qz:d?;,|?py{9_jg5K1'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'PS.pjzL11|@yh;J7k*I8HZL?ph]]`.D[j?/SmSO(Z7%q9R`52J(*&kmn&-j}S8j}'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'uf|=$I>,W={Xsr=oiY:3u<}!gUOdU@5f[KkTP7ksCi&62s3_-Vbz`Mn={0g^UV 3'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'Voz+{Tt*sd+H4l9q49CSTJ,HWUA;):Lo/_X_BXjY)Hv.ov?@Tt&cW42U%|dg1+AR'); // Cambia esto por tu frase aleatoria.

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

