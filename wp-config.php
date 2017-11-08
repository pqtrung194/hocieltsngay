<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hocielts');

/** MySQL database username */
define('DB_USER', 'trungpham');

/** MySQL database password */
define('DB_PASSWORD', 'quoctrung123#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i_bjtqA/cqE>|/5TN]Aar,pJ--Fq6,%lKEje{Q4+B2So8/sDlnOQkZIemKrNm%%?');
define('SECURE_AUTH_KEY',  '|t]x/&onu@46I$5<MPNx1qtb]]eR&kZ?m]Mbi#(v3iA7mAWbEVA,w~m4Dgg%iT)]');
define('LOGGED_IN_KEY',    'm0EW*6)}a+o@PE6_|f&n&zL_sf@m%1uf(9i<[z[uPy5m] ^!hi!d- )X/MTMZ~ch');
define('NONCE_KEY',        'M:HV9/Z <!09@NO?sW)`vhxx-t^UKjfz=Oe3TRvM5/s-&7&P$Ja#R[$<}.,$wK[H');
define('AUTH_SALT',        'Dat%[>]6;#urFwsjYs}6.K1{?c@Z0BR$?FoeO<r||yvgj9.l=C$2n@V|( U8B`PL');
define('SECURE_AUTH_SALT', 'ne!O+l >+u;Cv+?t#C5Z,wIikkzP]/c.iRp0*-$5iF!A/7F#$(H)A|aFbg^Ii%^G');
define('LOGGED_IN_SALT',   'LB,!2^j[K@Ct:]_c*NQ6K.cm*M7h6)a5N*.xzAfZI5@pu^IXqn<-tpRQha)]sH_0');
define('NONCE_SALT',       'J_~f<Iz:=gai =J(D9?w+9H6B@)![b]QK@o}|xtek@VLwR[|b6RbpP.]||?0z|K8');
/*
define('AUTH_KEY',         ':Ru^$2?X$YfyHV4KoMipKik$g{~5|Ji;]+I&ilHfwFM*g[QE/O9[k@y)+|qhq3rh');
define('SECURE_AUTH_KEY',  'CJl(X}) iRGG(?@g|56j#&~Uh?g*aMbSEw,P%[E-c.|9eZ%|o,F`|(7^=^ldmu]U');
define('LOGGED_IN_KEY',    'qoGiIQ^2+0N+&.X9f(FI_8-2zA^P|h?QiCma_*Kf*@N>hmxvyshY!jPl0{UN67om');
define('NONCE_KEY',        'Gs}}}A:VBHk2kBI.NTRq=xYRR^b$+88}6YQ5t&8%mwd.N<j%SMsgfPsQfmakL:s1');
define('AUTH_SALT',        'JiWU+q]2fPN#%[4#J&;C)+(LB|~W8ZEJ0KW;A2v6@dUl(-U Hc;||),E*qNa^fz{');
define('SECURE_AUTH_SALT', '@S=`ocw8>$QBDt-RXB_.2+jTqs4@F+DG8#L.zS)T`m>8I%Yca1)g)iR6f2>93>:b');
define('LOGGED_IN_SALT',   ',-6d*>.a~pp+R;+?6VNm!(#Bb2iN|0|osEYn)fl^|YX|Lm_Rh]4,m{`@f3A:UCu@');
define('NONCE_SALT',       ';la(em35o4F:Tx.GU!0J]H*)/,GK-AuMBs<&>l6y;<Dv?ixta*;`Kl3>*`H=U9d`');
*/
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
