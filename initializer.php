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

$social = array(
    array(
        'icon' => 'instagram',
        'label' => 'Instagram',
        'text' => '@luxdigital.mkt',
        'link' => 'https://instagram.com/luxdigital.mkt'
    ),
);


$contact = array(
    array(
        'icon' => 'whatsapp',
        'label' => 'WhatsApp',
        'text' => '+351 921 759 523',
        'link' => 'https://api.whatsapp.com/send?phone=351921759523'
    ),
    array(
        'icon' => 'envelope',
        'label' => 'Email',
        'text' => 'info@luxdigital.pt',
        'link' => 'mailto:info@luxdigital.pt'
    ),
    array(
        'icon' => 'telephone',
        'label' => 'Telefone',
        'text' => '+351 913 936 942',
        'link' => 'tel:351913936942'
    ),
);
