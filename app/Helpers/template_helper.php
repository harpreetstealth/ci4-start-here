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

function load_template_admin(
    string $main_template,
    string $assets_module = 'common',
    array $data = []
): string
{

    $header = View(
        'Partials\Views\Admin\header',
        array_merge(
            $data,
            [
                'asset_module' => $assets_module
            ]
        )
    );

    $footer = View(
        'Partials\Views\Admin\footer',
        array_merge(
            $data,
            [
                'asset_module' => $assets_module
            ]
        )
    );

    $menu = View(
        'Partials\Views\Admin\navbar',
        $data
    );

    /* load minify class */
    $htmlMinify = new \voku\helper\HtmlMin();

    /* get minified view */
    return $htmlMinify->minify(
        "{$header}{$menu}{$main_template}{$footer}"
    );
}
