<?php namespace Partials\Config;

class Assets extends \CodeIgniter\Config\BaseConfig
{
    /**
     * static variable with list of all assets
     *
     * @var array
     * @author Harpreet Stealth
     */
    public static $jsAssets = [
        'common' => [
            'assets/js/bootstrap.bundle.min.js',
            'assets/js/all.min.js'
        ],
        'home' => [
            'assets/js/modules/home.js'
        ],
        'custom'  => [
            'assets/js/modules/base.js'
        ]
    ];

    /**
     * static variable for css
     *
     * @var array
     * @author Harpreet Stealth
     */
    public static array $cssAssets = [
        'common' => [
            'assets/css/bootstrap.min.css',
            'assets/css/all.min.css'
        ],
        'home' => [],
        'custom'  => [
            'assets/css/modules/custom.css'
        ]
    ];
}
