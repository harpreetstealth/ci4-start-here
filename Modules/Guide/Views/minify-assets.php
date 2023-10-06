<div class="row">
<div class="col-12 mt-3 set-browser-height overflow-auto">
        <h1 class="text-primary border-bottom pb-2">
           3. Minify Assets
        </h1>
        <p>
            Assets can be anything from css, js to images. But here we will talk about the 
            JS and CSS files.
        </p>
        <p>
            <b>PROBLEM:</b> <br> Every HTML page has multiple JS and CSS files that are required for the page. <br>
            But, too many requests from browser can increase load time for user and reduce page SEO perfomance.
        </p>
        <p>
            <b>SOLUTION:</b> <br>
            We can not write a small script that we can run based on our previous 
            <a href="<?php echo base_url('guide/manage-assets') ?>">module based asset setup</a>
        </p>
        <p>
            This code is part of <code>Site</code> module. Because we expect this to be part of your actual code. <br>
            CI4 provides us CLI routes as well, that simply means routes that are available through command line. <br>
            File <code>
                Module/Site/Config/Routes.php
            </code> with following code <br>
            <pre class="alert alert-primary">
                <code>
                    &lt;?php 
                    /* the default route */
                    $routes->cli("minify", '\Site\Controllers\handle::minify');

                    /* the route with parameter JS or CSS */
                    $routes->cli("minify/:alpha", '\Site\Controllers\handle::minify/$1');
                </code>
            </pre>
        </p>
        <p>
            You can check the caled function <code>minify()</code> in file <code>
                Module/Site/Controlers/Handle.php
            </code>
        </p>
        <p class="alert alert-info">
            <i class="fa-solid fa-circle-exclamation me-1"></i> The code above is already in place, you do not need to write it.
        </p>

        <h3 class="text-danger">
            How to minify?
        </h3>
        <p>
            To minify the assets all you need to do is run the following commands in your terminal from your profject root.
            <pre class="alert alert-primary">
                <code>
                    /** run this command for all file JS and CSS */
                    /path/to/php public/index.php minify

                    /** or JS files only */
                    /path/to/php public/index.php minify js

                    /** or CSSfiles only */
                    /path/to/php public/index.php minify css
                </code>
            </pre>
        </p>
        <p class="alert alert-info">
            <i class="fa-solid fa-circle-exclamation me-1"></i> All minified assets are written to directory
            <code>public/asstets/minifieds/</code> 
        </p>


        <p class="alert alert-warning">
            <i class="fa-solid fa-circle-exclamation me-1"></i> To use the minified assets you need to update value 
            for the key <code>Site\Config\SiteConf.useMinifiedAssets</code> to <code>1</code> in file <code>.env</code>. <br>
            A file <code>Sample.env</code> is already provided to you with this code.
        </p>
    </div>
</div>
