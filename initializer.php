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

$servicos = array(
    array(
        'icon' => 'columns-gap',
        'color' => '#000',
        'title' => 'Projeto Estratégico',
        'short_desc' => 'Para colocar a sua empresa na rota de decisão dos seus potenciais clientes.'
    ),
    array(
        'icon' => 'chat-left-heart',
        'color' => '#ff0000',
        'title' => 'Redes Sociais',
        'short_desc' => 'É através delas que, dia após dia, construímos a sua proximidade com o seu público.'
    ),
    array(
        'icon' => 'bar-chart-fill',
        'color' => '#66ff00',
        'title' => 'Tráfego Pago',
        'short_desc' => 'Com anúncios direcionados, garante que a sua empresa apareça nas buscas do seu público alvo.'
    ),
    array(
        'icon' => 'house-fill',
        'color' => '#2a7fff',
        'title' => 'Website',
        'short_desc' => 'Contar a história da sua empresa e criar uma relação ainda mais próxima com o seu público.'
    ),
);