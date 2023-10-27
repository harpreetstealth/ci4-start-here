<?php
function get_js_assets( string $asset_module )
{
    $siteConf = new \Site\Config\SiteConf();

    /* if miified assets are in use */
    if ( $siteConf->useMinifiedAssets == 1 )
    {
        return [
            "assets/minified/{$asset_module}.js"
        ];
    }

    $common_js = \Partials\Config\Assets::$jsAssets['common'];

    if ( $asset_module != 'common' && $asset_module != 'admin' )
    {
        $requires_js = \Partials\Config\Assets::$jsAssets[$asset_module];
        return array_merge(
            $common_js,
            $requires_js
        );
    }
    elseif ( $asset_module == 'admin' )
    {
        return \Partials\Config\Assets::$jsAssets[$asset_module];
    }
    else
    {
        return $common_js;
    }
}

function get_css_assets( string $asset_module )
{
    $siteConf = new \Site\Config\SiteConf();
    if ( $siteConf->useMinifiedAssets == 1 )
    {
        return [
            "assets/minified/{$asset_module}.css"
        ];
    }

    $common_css = \Partials\Config\Assets::$cssAssets['common'];
    if ( $asset_module != 'common' && $asset_module != 'admin' )
    {
        $requires_css = \Partials\Config\Assets::$cssAssets[$asset_module];
        return array_merge(
            $common_css,
            $requires_css
        );
    }
    elseif ( $asset_module == 'admin' )
    {
        return \Partials\Config\Assets::$cssAssets[$asset_module];
    }
    else
    {
        return $common_css;
    }
}
