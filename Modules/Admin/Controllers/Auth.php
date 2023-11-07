<?php namespace Admin\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends \App\Controllers\BaseController
{
    use ResponseTrait;
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
     * function to handle login request
     *
     * @return ResponseInterface
     * @author Harrpeet Stealth
     */
    function login(): \CodeIgniter\HTTP\ResponseInterface
    {
        $rules = [
            'username' => [
                'label'  => 'Username',
                'rules'  => 'required|alpha_numeric|min_length[8]|max_length[15]',
                'errors' => [
                    'required'      => 'Please provide a valid {field}',
                    'alpha_numeric' => '{field} cannot have characters or spaces',
                    'min_length'    => 'Character length for {field} must be between 10-15',
                    'max_length'    => 'Character length for {field} must be between 10-15'
                ]
            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required|min_length[8]|max_length[100]',
                'errors' => [
                    'min_length' => 'Your {field} is too short. You want to get hacked?',
                    'max_length' => 'Your {field} is too login. You want to forget it?'
                ]
            ]
        ];

        if (  ! $this->validate( $rules ) )
        {
            return $this->failValidationErrors(
                $this->validator->listErrors(),
                400
            );
        }
        else
        {
            $username = $this->request->getPost( 'username' );
            $password = $this->request->getPost( 'password' );

            $adminModel = new \Admin\Models\AdminModel();

            $admin = $adminModel->where(
                [
                    'admin_username' => strip_tags( $username ),
                    'admin_status'   => 'active'
                ]
            )->first();
            

            if ( empty( $admin ) )
            {
                return $this->fail( "Invalid Login Credentials", 403 );
            }
            else
            {
                if (! password_verify( $password, $admin->admin_pwd )) 
                {
                    return $this->fail( "Invalid Login Credentials", 403 );
                }
                else 
                {
                    $this->session->set(
                        [
                            'admin_logged_in' => true,
                            'admin_id' => $admin->admin_id,
                            'admin_email' => $admin->admin_email
                        ]
                    ) ;

                    return $this->respond(
                        [
                            'redirect' => base_url('admin/dashboard')
                        ],
                        200
                    );
                }
            }
        }
    }
}
