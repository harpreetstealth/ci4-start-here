<?php

namespace App\Controllers;

class Home extends BaseController
{

    function initController(
        \CodeIgniter\HTTP\RequestInterface $request,
        \CodeIgniter\HTTP\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->response = $response;
        $this->logger   = $logger;
    }

    public function index(): string
    {
        return view( 'welcome_message' );
    }
}
