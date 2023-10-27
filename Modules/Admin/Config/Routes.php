<?php
/* a route group that starts from  */
$routes->group( 'admin', ['filter' => 'adminsession'], static function ( $routes )
{
    /* route to load documentation for mapping modules and namespaces */
    $routes->get( '', '\Admin\Controllers\Handle::index' );
    $routes->post( 'do-login', '\Admin\Controllers\Auth::login' );
    $routes->get( 'dashboard', '\Admin\Controllers\Handle::dashboard' );
    $routes->get( 'logout', '\Admin\Controllers\Handle::logout' );
} );
