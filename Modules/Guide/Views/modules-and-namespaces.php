<div class="col-12 mt-3 set-browser-height overflow-auto">
    <h1 class="text-danger">
        1. Creating New Module
    </h1>
    <ol>
        <li>
            To create a new module, you need to create a folder under <code>Modules</code> folder
        </li>
        <li>
            Example, you want to create a module for authentication named <code>Auth</code>. 
            Your folder structure should look like this. <br>
            <pre class="alert alert-primary">
                <code>
                    Modules
                        |_ Auth/
                            |_Controllers/
                                |_Handle.php // The controller file
                            |_Models/
                            |_Config/ // for config and routes file
                                |_Routes.php // if required
                                |_AuthConf.php // if required, any name
                            |_Views/ 
                                |_login.php
                                |_signup.php
                </code>
            </pre>
        </li>
        <li>
            Once you have created the structure you need to map your namespace with directory. <br>
            For this you need to update the following files.
            <ol>
                <li>
                    add the following line <br> 
                    <code>'Auth'         => ROOTPATH . 'Modules/Auth'</code> <br>

                    to <code>array</code> variable <code>$psr4</code> defined in file
                    <code>app/Config/Autoload.php</code> <br>
                    Updated code should look like this: <br>
                    <pre class="alert alert-primary">
                        <code>
                            public $psr4 = [
                            APP_NAMESPACE  => APPPATH, // For custom app namespace
                            'Config' => APPPATH . 'Config',
                            ...,
                            ...,
                            'Auth'         => ROOTPATH . 'Modules/Auth'
                        ]
                        </code>
                    </pre>
                </li>
                <li>
                    Next, you need to add the name of module to array <code>$aliases</code>
                    <code>/var/www/html/dev-demo/app/Config/Modules.php</code> <br> 
                    Update code should look like this: <br>
                    <pre class="alert alert-primary">
                        <code>
                            public $aliases = [ 
                                'events',
                                'filters',
                                'registrars',
                                'routes',
                                'services',
                                ...,
                                ..., 
                                'Auth'
                            ];
                        </code>
                    </pre>
                </li>
            </ol>
        </li>
    </ol>
    <p>You will now be able to use folowing namespaces</p>
    <ol>
        <li>
            <code>
                Auth\Controllers
            </code> in your new controller <code>Handle.php</code>
        </li>
        <li>
            <code>
                Auth\Models
            </code> in your auth relate models
        </li>
        <li>
            <code>
                Auth\Views
            </code> to create new view files
        </li>
    </ol>
</div>