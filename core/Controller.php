<?php

/* 
 * Copyright (C) 2017 Murali Mutyala
 * All rights are reserved under MIT license
 * ----------------------------------------------------------------------
 * Created on 09/04/2017 by muralimutyala
 * ----------------------------------------------------------------------
 */

namespace App\Core;

require SITE_ROOT.DS.'vendor'.DS.'autoload.php';

class Controller
{
    /**
     * Loads the view file and renders with 
     * data if any
     * 
     * @param string $view
     * @param array $data
     */
    public function render($view, $data = [])
    {
        //Path to Views directory
        $loader = new \Twig_Loader_Filesystem(VIEWS.DS);
        
        $twig = new \Twig_Environment($loader, [
            'debug' => true
        ]);
        $twig->addExtension(new \Twig_Extension_Debug());
        
        echo $twig->render($view, $data);
    }
}



