<?php
/**
 * Date: 6/8/15
 * Time: 4:24 PM
 */


//
// CONFIGURABLE OPTIONS
//

$_config            = array
(
    'url_var_name'             => 'q',
    'flags_var_name'           => 'hl',
    'get_form_name'            => '____pgfa',
    'basic_auth_var_name'      => '____pbavn',
    'max_file_size'            => -1,
    'allow_hotlinking'         => 0,
    'upon_hotlink'             => 1,
    'compress_output'          => 0
);
$_flags             = array
(
    'include_form'    => 1,
    'remove_scripts'  => 0,
    'accept_cookies'  => 1,
    'show_images'     => 1,
    'show_referer'    => 1,
    'rotate13'        => 0,
    'base64_encode'   => 1,
    'strip_meta'      => 1,
    'strip_title'     => 0,
    'session_cookies' => 1
);
$_frozen_flags      = array
(
    'include_form'    => 0,
    'remove_scripts'  => 0,
    'accept_cookies'  => 0,
    'show_images'     => 0,
    'show_referer'    => 0,
    'rotate13'        => 0,
    'base64_encode'   => 0,
    'strip_meta'      => 0,
    'strip_title'     => 0,
    'session_cookies' => 0
);
$_labels            = array
(
    'include_form'    => array('Include Form', 'Include mini URL-form on every page'),
    'remove_scripts'  => array('Remove Scripts', 'Remove client-side scripting (i.e JavaScript)'),
    'accept_cookies'  => array('Accept Cookies', 'Allow cookies to be stored'),
    'show_images'     => array('Show Images', 'Show images on browsed pages'),
    'show_referer'    => array('Show Referer', 'Show actual referring Website'),
    'rotate13'        => array('Rotate13', 'Use ROT13 encoding on the address'),
    'base64_encode'   => array('Base64', 'Use base64 encodng on the address'),
    'strip_meta'      => array('Strip Meta', 'Strip meta information tags from pages'),
    'strip_title'     => array('Strip Title', 'Strip page title'),
    'session_cookies' => array('Session Cookies', 'Store cookies for this session only')
);

$_hosts             = array
(
    '#^127\.|192\.168\.|10\.|172\.(1[6-9]|2[0-9]|3[01])\.|localhost#i'
);
$_hotlink_domains   = array();
$_insert            = array();

//
// END CONFIGURABLE OPTIONS. The ride for you ends here. Close the file.
//

$_iflags            = '';
$_system            = array
(
    'ssl'          => extension_loaded('openssl') && version_compare(PHP_VERSION, '4.3.0', '>='),
    'uploads'      => ini_get('file_uploads'),
    'gzip'         => extension_loaded('zlib') && !ini_get('zlib.output_compression'),
    'stripslashes' => get_magic_quotes_gpc()
);
$_proxify           = array('text/html' => 1, 'application/xml+xhtml' => 1, 'application/xhtml+xml' => 1, 'text/css' => 1);
$_version           = '0.5b2';
$_branding          = 'VTM Proxy';
$_title             = 'VTM Proxy';
$_http_host         = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost');
$_script_url        = 'http' . ((isset($_ENV['HTTPS']) && $_ENV['HTTPS'] == 'on') || $_SERVER['SERVER_PORT'] == 443 ? 's' : '') . '://' . $_http_host . ($_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443 ? ':' . $_SERVER['SERVER_PORT'] : '') . $_SERVER['PHP_SELF'];
$_script_base       = substr($_script_url, 0, strrpos($_script_url, '/')+1);
$_url               = '';
$_url_parts         = array();
$_base              = array();
$_socket            = null;
$_request_method    = $_SERVER['REQUEST_METHOD'];
$_request_headers   = '';
$_cookie            = '';
$_post_body         = '';
$_response_headers  = array();
$_response_keys     = array();
$_http_version      = '';
$_response_code     = 0;
$_content_type      = 'text/html';
$_content_length    = false;
$_content_disp      = '';
$_set_cookie        = array();
$_retry             = false;
$_quit              = false;
$_basic_auth_header = '';
$_basic_auth_realm  = '';
$_auth_creds        = array();
$_response_body     = '';
