<?php namespace Site\Controllers;

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
     * function to minify assets
     *
     * @return string
     * @author Harpreet Stealth
     */
    public function minify( string $type = 'all' ): string
    {
        if ( $type == 'js' )
        {
            return $this->_minifyJs();
        }
        elseif ( $type == 'css' )
        {
            return $this->_minifyCss();
        }
        elseif ( $type == 'all' )
        {
            return $this->_minifyJs() . $this->_minifyCss();
        }
        else
        {

        }

    }

    private function _minifyJs(): string
    {
        $responseStr = '';
        /* get the js Assets */
        $jsAssets = \Partials\Config\Assets::$jsAssets;
        // d( $jsAssets );
        /* loop through the assets */
        foreach ( $jsAssets as $module => $files )
        {
            /* if current module in the loop is on COMMON */
            if ( $module != 'common' )
            {
                /* we add files from common */
                $files = array_merge(
                    $jsAssets['common'],
                    $files
                );
            }

            \CodeIgniter\CLI\CLI::write("== Looping for Module ".\CodeIgniter\CLI\CLI::color($module, 'red'));

            /* create an instance */
            $minifier = new \MatthiasMullie\Minify\JS();

            foreach ( $files as $file )
            {
                \CodeIgniter\CLI\CLI::write("    * adding file ".\CodeIgniter\CLI\CLI::color($file, 'blue')." to minify");
                /* add path to minifier */
                $minifier->add( $file );
            }

            /* save minified file */
            $minifier->minify( FCPATH."assets/minified/{$module}.js" );
        }

        return $responseStr;
    }

    private function _minifyCss(): string
    {
        $responseStr = '';
        /* get the js Assets */
        $cssAssets = \Partials\Config\Assets::$cssAssets;
        // d( $cssAssets );
        /* loop through the assets */
        foreach ( $cssAssets as $module => $files )
        {
            /* if current module in the loop is on COMMON */
            if ( $module != 'common' )
            {
                /* we add files from common */
                $files = array_merge(
                    $cssAssets['common'],
                    $files
                );
            }

            \CodeIgniter\CLI\CLI::write("== Looping for Module ".\CodeIgniter\CLI\CLI::color($module, 'red'));

            /* create an instance */
            $minifier = new \MatthiasMullie\Minify\CSS();

            foreach ( $files as $file )
            {
                \CodeIgniter\CLI\CLI::write("    * adding file ".\CodeIgniter\CLI\CLI::color($file, 'blue')." to minify");
                /* add path to minifier */
                $minifier->add( $file );
            }

            /* save minified file */
            $minifier->minify( FCPATH."assets/minified/{$module}.css" );
        }

        return $responseStr;
    }

}
