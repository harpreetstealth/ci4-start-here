<?php
/* the default route */
$routes->cli("minify", '\Site\Controllers\Handle::minify');

/* the route with parameter JS or CSS */
$routes->cli("minify/:alpha", '\Site\Controllers\Handle::minify/$1');