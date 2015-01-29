<?php
    /**
     * The base configurations of the WordPress.
     *
     * This file has the following configurations: MySQL settings, Table Prefix,
     * Secret Keys, WordPress Language, and ABSPATH. You can find more information
     * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
     * wp-config.php} Codex page. You can get the MySQL settings from your web host.
     *
     * This file is used by the wp-config.php creation script during the
     * installation. You don't have to use the web site, you can just copy this file
     * to "wp-config.php" and fill in the values.
     *
     * @package WordPress
     */

    // Required for batcache use
    define('WP_CACHE', true);

    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'wordpress_db');

    if (isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false) {
        /** Live environment Cloud SQL login and SITE_URL info */
        /** Note that from App Engine, the password is not required, so leave it blank here */
        define('DB_HOST', ':/cloudsql/your-project-id:wordpress');
        define('DB_USER', 'root');
        define('DB_PASSWORD', '');
    } else {
        /** Local environment MySQL login info */
        define('DB_HOST', '127.0.0.1');
        define('DB_USER', 'wp-admin');
        define('DB_PASSWORD', 'password');
    }

    // Determine HTTP or HTTPS, then set WP_SITEURL and WP_HOME
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
    {
        $protocol_to_use = 'https://';
    } else {
        $protocol_to_use = 'http://';
    }
    define( 'WP_SITEURL', $protocol_to_use . $_SERVER['HTTP_HOST']);
    define( 'WP_HOME', $protocol_to_use . $_SERVER['HTTP_HOST']);

    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');

    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');

    /**#@+
     * Authentication Unique Keys and Salts.
     *
     * Change these to different unique phrases!
     * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
     * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
     *
     * @since 2.6.0
     */
    define('AUTH_KEY',         '0adzTk^IiWTc=z_ZOb9j+DH07>Ye6jOlic<c6kgzS0sd|q>=4.%_<AS6HoY{Q)%I');
    define('SECURE_AUTH_KEY',  '_;+@Sz}OKyciC2DLz^18BG<;}Z:LT8>uPN`7UM_^QUn]?gi V3{:gdLcB#N,c}lj');
    define('LOGGED_IN_KEY',    '?j?n93xR1}:k)SMA+gJ 4KWT6q>U0`XN}6LOC;Lx>a3ixZ4.-{xOi_1R?B`9F.PM');
    define('NONCE_KEY',        'a!vb+O`Gx%V~b.ZXIt(9zZ`+{uscyOVm1}eIjAb}Tsr6o,;Nw.u(<A!l*]`EFTV,');
    define('AUTH_SALT',        '_SMw[5d1#|*mnjR`+k:5{Q4AjiUp)Qn>]&lo+]++K>G]-@!Gn|(.:tgI2|u=i-&-');
    define('SECURE_AUTH_SALT', ')<-HpX{J@a<l@KI^Q,?r2WV8!$)@wJ3i)AA+-Zi9uKBY&R^u?J>>0%Q}-GM?<kbG');
    define('LOGGED_IN_SALT',   '/A3c3]?:2JrO6=~ip/~^n nL#|%l>~[OnI|p!_y!F;iC_B:AR|mbmwtL/ldj}pYf');
    define('NONCE_SALT',       '-3N_|bY$?:vMrG_(+syaaL{X4!t+,**ZuUVv.PeoSi^+>3H|&]{{i~]xy=!Oc^|A');

    /**#@-*/

    /**
     * WordPress Database Table prefix.
     *
     * You can have multiple installations in one database if you give each a unique
     * prefix. Only numbers, letters, and underscores please!
     */
    $table_prefix  = 'wp_';

    /**
     * WordPress Localized Language, defaults to English.
     *
     * Change this to localize WordPress. A corresponding MO file for the chosen
     * language must be installed to wp-content/languages. For example, install
     * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
     * language support.
     */
    define('WPLANG', '');

    /**
     * For developers: WordPress debugging mode.
     *
     * Change this to true to enable the display of notices during development.
     * It is strongly recommended that plugin and theme developers use WP_DEBUG
     * in their development environments.
     */
    define('WP_DEBUG', false);
    
    // configures batcache
    $batcache = [
      'seconds'=>0,
      'max_age'=>30*60, // 30 minutes
      'debug'=>false
    ];
    /* That's all, stop editing! Happy blogging. */

    /** Absolute path to the WordPress directory. */
    if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/public.built/');

    /** Sets up WordPress vars and included files. */
    require_once(ABSPATH . 'wp-settings.php');


