<?php
/*
  Server Push Strategy:
  Push above-the-fold assets (CSS, JS, images, etc.)
  Push external assets (font libraries, JS libraries, etc.)
  Push "next step" pages (if you are certain the visitor will go to this page next)
*/

function push_to_browser($as, $uri) {
    header('Link: ' . $uri . '; rel=preload; as=' . $as, false);
}

$assets = array(
    '<//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i,900,900i>' => 'style',
    '</style-main.css>' => 'style',
    '/CSS/header.css' => 'style',
    '<//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js>' => 'script',
    '</JS/libs/jquery.flexslider-min.js>' => 'script',
    '</images/mainpromo/welcome01-1600.jpg>'=> 'image'
);

array_walk( $assets, 'push_to_browser');

?>
