<?php

/* 
 * Copyright (C) 2017 Murali Mutyala
 * All rights are reserved under MIT license
 * ----------------------------------------------------------------------
 * Created on 09/04/2017 by muralimutyala
 * ----------------------------------------------------------------------
 */

namespace App\Core;

class Route
{
    /**
     * Default controller
     * @var string 
     */
    protected $controller = 'HomeController';
    
    /**
     * Default Method/Action
     * @var string 
     */
    protected $action = 'index';
    
    /**
     * Parameters on method/action
     * @var array 
     */
    protected $params = array();
    
    public function __construct() 
    {
        $request = $this->parseUrl();
        
        $controller = CONTROLLERS.DS. $request[0] . 'Controller.php';
        if(file_exists($controller))
        {
            $this->controller = ucfirst($request[0]).'Controller';
            unset($request[0]);
        }
        $class = '\\App\\Controllers\\'.$this->controller;
        $this->controller = new $class;
        
        if(isset($request[1]))
        {
            if(method_exists($this->controller, $request[1]))
            {
                $this->action = $request[1];
                unset($request[1]);
            }
        }
        
        $this->params = $request ? array_values($request) : [];
    }
    
    
    public function run()
    {
        call_user_func_array([$this->controller, $this->action], $this->params);
    }
    
    
    /**
     * Checks whether URL exists
     * and returns an array of strings
     * 
     * @return array
     */
    public function parseUrl()
    {
        //$_GET['url'] 
        $url = filter_input(INPUT_GET, 'url');
        if(isset($url))
        {
           return $url = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));
        }
    }
}



