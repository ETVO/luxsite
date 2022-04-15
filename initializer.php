<?php
/**
 * Site functions and definitions
 * 
 * @package luxsite
 */

$url_prefix = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . '://' . $_SERVER['HTTP_HOST'];

// Core constants 
define("IMG_DIR", $url_prefix . '/assets/imgs/');
define("CSS_DIR", $url_prefix . '/assets/css/');
define("JS_DIR", $url_prefix . '/assets/js/');
define("FONTS_DIR", $url_prefix . '/assets/fonts/');