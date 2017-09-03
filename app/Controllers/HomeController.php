<?php

/* 
 * Copyright (C) 2017 Murali Mutyala
 * All rights are reserved under MIT license
 * ----------------------------------------------------------------------
 * Created on 09/04/2017 by muralimutyala
 * ----------------------------------------------------------------------
 */

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'HomeController: Index',
            'content' => 'This is HomeController Index file'
        ];
        
        $this->render('Home/index.html', [
            'data' => $data
        ]);
    }
}



