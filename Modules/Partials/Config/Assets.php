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
            'assets/js/all.min.js',
            'assets/js/modules/base.js'
        ],
        'admin' => [
            'assets/js/progressbar.min.js',
            'assets/js/bootstrap.bundle.min.js',
            'assets/js/all.min.js',
            'assets/js/modules/admin/base.js',
            'assets/js/modules/admin/auth.js'
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
        'admin' => [
            'assets/css/bootstrap.min.css',
            'assets/css/all.min.css',
            'assets/css/admin/base.css'
        ]
    ];
}
