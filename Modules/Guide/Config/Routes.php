<?php
/* a route group that starts from  */
$routes->group( 'guide', static function ( $routes )
{
    /* route to load documentation for mapping modules and namespaces */
    $routes->get( 'modules-and-namespaces', '\Guide\Controllers\Handle::modulesAndNamespaces' );

    /* route to documenation for asset usage and minification */
    $routes->get( '/manage-assets-doc', '\Guide\Controllers\Handle::manageAssetsDoc' );
} );
