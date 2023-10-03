<div class="col-12 mt-3 set-browser-height overflow-auto">
    <h2 class="text-danger">
        Follow these steps to create a new module
    </h2>
    <ol>
        <li>
            To create a new module, you need to create a folder under <code>Modules</code> folder
        </li>
        <li>
            Example, you want to create a module for authentication named <code>Auth</code>. 
            Your folder structure should look like this. <br>
            <code>
                Modules <br>
                |_ Auth/ <br>
                &nbsp;&nbsp; |_Controllers/ <br>
                &nbsp;&nbsp;&nbsp;&nbsp; |_Handle.php // The controller file<br>
                &nbsp;&nbsp; |_Models/ <br>
                &nbsp;&nbsp; |_Config/ // for config and routes file<br>
                &nbsp;&nbsp;&nbsp;&nbsp; |_Routes.php // if required<br>
                &nbsp;&nbsp;&nbsp;&nbsp; |_AuthConf.php // if required, any name<br>
                &nbsp;&nbsp; |_Views/ <br>
                &nbsp;&nbsp;&nbsp;&nbsp; |_login.php <br>
                &nbsp;&nbsp;&nbsp;&nbsp; |_signup.php <br>
            </code>
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
                    <code>
                        public $psr4 = [  <br>
                        &nbsp;&nbsp;APP_NAMESPACE  => APPPATH, // For custom app namespace <br>
                        &nbsp;&nbsp;'Config' => APPPATH . 'Config', <br>
                        &nbsp;&nbsp;..., <br>
                        &nbsp;&nbsp;..., <br>
                        &nbsp;&nbsp;'Auth'         => ROOTPATH . 'Modules/Auth' <br>
                    ]
                    </code>
                </li>
                <li>
                    Next, you need to add the name of module to array <code>$aliases</code>
                    <code>/var/www/html/dev-demo/app/Config/Modules.php</code> <br> 
                    Update code should look like this: <br>
                    <code>
                        public $aliases = [ <br>
                        &nbsp;&nbsp;'events', <br>
                        &nbsp;&nbsp;'filters', <br>
                        &nbsp;&nbsp;'registrars', <br>
                        &nbsp;&nbsp;'routes', <br>
                        &nbsp;&nbsp;'services', <br>
                        &nbsp;&nbsp;..., <br>
                        &nbsp;&nbsp;..., <br>
                        &nbsp;&nbsp;'Auth' <br>
                        ];
                    </code>
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