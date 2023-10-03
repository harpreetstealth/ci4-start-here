<?php
function load_template(
    string $main_template,
    string $assets_module = 'common',
    array $data = []
): string
{

    $header = View(
        'Partials\Views\header',
        array_merge(
            $data,
            [
                'asset_module' => $assets_module
            ]
        )
    );

    $footer = View(
        'Partials\Views\footer',
        array_merge(
            $data,
            [
                'asset_module' => $assets_module
            ]
        )
    );

    $menu = View(
        'Partials\Views\navbar',
        $data
    );

      /* load minify class */
      $htmlMinify = new \voku\helper\HtmlMin();

      /* get minified view */
      return $htmlMinify->minify( 
        "{$header}{$menu}{$main_template}{$footer}" 
    );

}