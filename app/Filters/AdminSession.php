<?php

namespace App\Filters;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminSession implements FilterInterface
{
    use ResponseTrait;
    public function before(
        RequestInterface $request,
        $arguments = null
    )
    {
        /* get session */
        $session = session();
        /* get current path */
        $routePath = $request->getUri()->getRoutePath();
        /* if session is missing */
        if (  ! $session->has( 'admin_logged_in' ) )
        {
            /* we are on admin login */
            if ( $routePath === 'admin' || strpos( $routePath, 'admin/do-login' ) !== false)
            {
                /* we do nothing */
            }
            /* anywhere in admin */
            elseif ( strpos( $routePath, 'admin/' ) !== false )
            {
                /* ajax request */
                if ( $request->isAJAX() ) /* request is ajax */
                {
                    /* return 403 */
                    return $this->failForbidden();
                }
                else
                {
                    /* redirect */
                    return redirect()->to( base_url( 'admin' ) );
                }
            }
        }
        else /* session is SET */
        {
            /* if you are on admin home */
            if ( $routePath === 'admin')
            {
                return redirect()->to( base_url( 'admin/dashboard' ) );
            }
        }

    }

    public function after(
        RequestInterface $request,
        ResponseInterface $response,
        $arguments = null
    )
    {
        // Do something here
    }
}
