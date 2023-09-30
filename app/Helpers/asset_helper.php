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
    
    if ( $asset_module != 'common' )
    {
        $requires_js = \Partials\Config\Assets::$jsAssets[$asset_module];
        return array_merge(
            $common_js,
            $requires_js
        );
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
    if ( $asset_module !== 'common' )
    {
        $requires_css = \Partials\Config\Assets::$cssAssets[$asset_module];
        return array_merge(
            $common_css,
            $requires_css
        );
    }
    else
    {
        return $common_css;
    }
}
