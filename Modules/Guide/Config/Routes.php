<?php
/* this is home route */
$routes->get( '/', '\Guide\Controllers\Handle::index' );

/* a route group that starts from  */
$routes->group( 'guide', static function ( $routes )
{
    /* route to load documentation for mapping modules and namespaces */
    $routes->get( 'modules-and-namespaces', '\Guide\Controllers\Handle::modulesAndNamespaces' );

    /* route to documenation for asset usage and minification */
    $routes->get( 'manage-assets', '\Guide\Controllers\Handle::manageAssets' );

    /* route to load documentation for minifying assets */
    $routes->get( 'minify-assets', '\Guide\Controllers\Handle::minifyAssets' );
} );
