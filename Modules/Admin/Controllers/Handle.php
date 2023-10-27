<?php namespace Admin\Controllers;

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
     * load the index
     *
     * @return string
     * @author Harrpeet Stealth
     */
    public static function index(): string
    {
        return load_template_admin( View( 'Admin\Views\login' ), 'admin' );
    }

    /**
     * load the dashboard
     *
     * @return string
     * @author Harrpeet Stealth
     */
    public function dashboard(): string
    {
        $data = [
            'session' => $this->session
        ];
        return load_template_admin( 
            View( 'Admin\Views\dashboard', $data ), 
            'admin',
            $data
        );
    }
}
