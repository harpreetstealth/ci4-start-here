<?php namespace Guide\Controllers;

class Handle extends \App\Controllers\BaseController
{
    function initController(
        \CodeIgniter\HTTP\RequestInterface $request,
        \CodeIgniter\HTTP\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    )
    {
        parent::initController(
            $request,
            $response,
            $logger
        );
    }

    /**
     * function to load index for site, this is home page
     *
     * @return string
     * @author Harpreet Stealth
     */
    public function index(): string
    {
        return load_template(
            View( '\Guide\Views\index' ),
            'common'
        );
    }
    
    /**
     * function to load namespace document
     *
     * @return String
     * @author Harrpeet Stealth
     */
    public function modulesAndNamespaces() : String
    {
        return load_template(
            View( '\Guide\Views\modules-and-namespaces' ),
            'common'
        );
    }

    /**
     * function to load asset documentation view
     *
     * @return string
     * @author Harpreet Stealth
     */
    public function manageAssets(): string
    {
        return load_template(
            View( '\Guide\Views\manage-assets' ),
            'common'
        );
    }

    /**
     * fucniton to load minify asset documentation
     *
     * @return string
     * @author Harrpeet Stealth
     */
    public function minifyAssets(): string
    {
        return load_template(
            View( '\Guide\Views\minify-assets' ),
            'common'
        );
    }
}
