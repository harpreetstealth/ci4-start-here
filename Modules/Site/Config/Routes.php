<?php
/* this is home route */
$routes->get( '/', '\Site\Controllers\Handle::index' );

/* route to handle asset minification */
// $routes->get('/minify', '\Site\Controllers\Handle::minify');
// $routes->get('/minify/(:alpha)', '\Site\Controllers\Handle::minify/$1');

// $routes->cli('/minify', '\Site\Controllers\Handle::minify');
// $routes->cli('/minify/(:alpha)', '\Site\Controllers\Handle::minify/$1');

// $routes->group( 'authenticate', ['namespace' => 'Authenticate\Controllers'], static function ( $routes )
// {
//     $routes->get( 'hello/(:alpha)', 'Handle::yellow/$1' );
// } );

