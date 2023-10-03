<div class="row">
<div class="col-12 mt-3 set-browser-height overflow-auto">
        <h1 class="text-primary border-bottom pb-2">
           How to load and manage assets
        </h1>
        <p>
            Assets can be anything from css, js to images. But here we will talk about the 
            JS and CSS files.
        </p>
        <p>
            This asset management solves basic problem of using JS, CSS files that are not required on a perticular view. <br>
            <b>PROBLEM:</b> <br> For an example you have an <code>boostrap(JS/CSS)</code> file that is required for the project. <br>
            And you also have sliders on home page, but you end up including every script inside header. Even if it was required on the page or not.
        </p>
        <p>
            <b>SOLUTION:</b> <br>
            Let us assume that now you need to create 2 different views. A view for login and another for signup. <br>
            And you probably end up using 2 different javascript files for both views. <br>
            Guide to setup new modules with Contollers and Namespaces can be found
            <a href="<?php echo base_url('guide/modules-and-namespaces') ?>">
                here
            </a>. You will need this before work with views.
        </p>
        <p>
            As per previous module setup guide, I assume you already have the contoller
            <code>
                Module/Auth/Controllers/Handle.php
            </code> with following code <br>
            <pre class="alert alert-light">
                <code>
                    &lt;?php namespace Auth\Controllers;
                    class Handle extends \App\Controllers\BaseController
                    {
                        // concider this as constructor
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

                        public function login() 
                        {
                            // this function is for loadin templates 
                            load_template(
                                'Auth\Views\login',
                                'login' // name of the asset module
                            );
                        }

                        public function signup() 
                        {
                            // this function is for loadin templates 
                            load_template(
                                'Auth\Views\signup',
                                'signup' // name of the asset module
                            );
                        }
                </code>
            </pre>
        </p>
        <p>
            Your next step should now be to list required assets based on modules. <br>
            For this you need to update file <code>Modules/Partials/Config/Assets.php</code> <br>
            Let us say you need create a javascript <code>login.js</code> for the login view and 
            <code>signup.js</code> for signup view. <br>
            You need to add your assets with module name as a key. 
            Now, your update the file <code>Modules/Partials/Config/Assets.php</code> should look like this.
            <pre>
                <code>
                &lt;?php namespace Partials\Config;

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

                            // for login module
                            'login' => [
                                'assets/js/modules/login.js'
                            ],

                            // for signup module
                            'signup' => [
                                'assets/js/modules/signup.js'
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

                            //for login module
                            'login' => [
                                'assets/js/modules/login.css'
                            ],

                            // for signup module
                            'signup' => [
                                'assets/js/modules/signup.css'
                            ]
                        ];
                    }

                </code>
            </pre>

        </p>
        <p>
           For module <code>Auth</code> we have used two different file <code>login.js</code> and <code>signup.js</code>. <br>
           This is all you need to do to load assets based on views. <br>
           <b>SUGGESTION:</b> If you wish you can use only one asset module name as <code>auth</code> 
           (since login and signup are part of auth) and use 
           <code>assets/js/modules/auth.css</code> and  <code>assets/js/modules/auth.js</code>
        </p>
        <p class="alert alert-info">
            <i class="fa-solid fa-circle-exclamation me-1"></i> 
            For this guide we are using <code>Assets.php</code> config file from module 
            <code>Partials</code> defined under directory <code>Modules/Partials</code> <br>
            It is advised that you keep the module <code>Partials</code> as the part of your project 
            and modify it as required. <br>
            Module <code>Partials</code> contains basic 
            <code>header</code>, <code>footer</code>, <code>navbar</code> and <code>offcanvas</code> files.
        </p>
    </div>
</div>
