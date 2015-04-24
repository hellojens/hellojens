<?php
# Database Configuration
define( 'DB_NAME', 'hellojens_wpengine' );
define( 'DB_USER', 'hellojens' );
define( 'DB_PASSWORD', 'W2mAdgckNjEhK6uCMNEj' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'E9fNZMdmd%`;D_MnD,!g&H.rYi|+-GeDqjj<]q9LrK)F.Rk|j$WZMF17ugahes@)');
define('SECURE_AUTH_KEY',  'y-&kz:<&@^oFw`X@SC-FXWc/SVH6b(7dlYars=sd5*Z)EmrEv!=+=r&:GoPzZ.XB');
define('LOGGED_IN_KEY',    '#p>?6YS;u l|)-A_4)ux4f!`z-]|iN4-yYkb `:WAk}`4q0zOS+PK`L/6:MP?a|>');
define('NONCE_KEY',        'o8#ewNd6--<?7[ZKD&:DhFo^G*t_CK5kxR_kqg%F*K;6k)Au/$T378L(8/nM6iU(');
define('AUTH_SALT',        'R>Q)ItFO-rt1R!d8v>9xm@JX(b+4|VdEeQgmtV7O=)Zz!@<b1&B~mVtgkH<U=}@g');
define('SECURE_AUTH_SALT', 'lC65_8CQ}|GM0lSax]eG9o/Vu&9{prFBTQ!|4o3:rHT>uH~^6E#sb)6-KbYz|N_4');
define('LOGGED_IN_SALT',   '@7NabhZeIQ9OP|d^:tC-)PnpB7Sp?!gs$=SroKo; _rrJk@-@a{Uo;cSEik^ jso');
define('NONCE_SALT',       'gy`T,vs5rL+?$Cl+ MhpZR8i`TPwbTW7qsC$:-$&t.f&6r}oCT% ,iuANb{WWAU9');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'hellojens' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '23855e191092467a3ad0856292cc0fd75825bf58' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '3215' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 22 );

define( 'WPE_LBMASTER_IP', '109.74.204.171' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'hellojens.dev', );

$wpe_varnish_servers=array ( 0 => 'pod-3215', );

$wpe_special_ips=array ( 0 => '109.74.204.171', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings




define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'hellojens.dev' );
define( 'PATH_CURRENT_SITE','/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
