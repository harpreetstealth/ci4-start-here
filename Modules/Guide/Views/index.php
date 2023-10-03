<div class="row">
    <div class="col-12 col-md-6 mt-3 set-browser-height overflow-auto border-end">
        <h1 class="text-primary border-bottom pb-2">
            Codeigniter 4 startup project
        </h1>
        <p>
            This is a sample project for codeigniter 4. You can clone and use it to start your projects.
        </p>
        <p class="fw-bold">
            This project uses following libraries.
        </p>
        <ol class="">
            <li>
                Bootstrap 5
            </li>
            <li>
                Fontawesome 6
            </li>
        </ol>
        <p class="text-danger">
            <b>NOTE:</b> No jQuery is being used, Avoid using it at all costs.
        </p>
        <p class="alert alert-warning">
            <i class="fa-solid fa-circle-exclamation me-1"></i> This homepage loads from <code>Guide</code> 
            module located at folder <code>Modules\Guide\</code> <br>
            once you feel if you have learned the how to use CI4, you can delete this module.
        </p>
    </div>
    <div class="col-12 col-md-6 mt-3">
        <h2 class="text-warning fw-bold">
            This project has following features
        </h2>
        <ol>
            <li>
                Module based code, see folder <code>Modules</code> in project root directory
                <ol>
                    <li>
                        To use new modules you need to add a folder under <code>Modules</code>.
                    </li>
                    <li>
                        An expected structure will look like this.
                    </li>
                </ol>
                <pre class="alert alert-light">
                    <code>
                        Modules
                            |_ User // an example modole, for users 
                            &nbsp;&nbsp; |_Controllers 
                            &nbsp;&nbsp; |_Models 
                            &nbsp;&nbsp; |_Config // for config and routes file
                            &nbsp;&nbsp; |_Views 
                    </code>
                </pre>
            </li>
            <li>
                A basic template with <code>header</code>, <code>navbar</code>, <code>footer</code> is already provided
            </li>
            <li>
                HTML minification on render is already implemented
            </li>
        </ol>
        <h3 class="text-primary">
            Development guide
        </h3>
        <ul>
            <li>
                <a href="<?php echo base_url('guide/modules-and-namespaces') ?>">
                    How to add and manage new modules with namespaces
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('guide/manage-assets') ?>">
                    How to add new assets based on module
                </a>
            </li>
            <li>
                <a href="">
                    How to minify newly added assets
                </a>
            </li>
        </ul>
    </div>
</div>
