<?php

/* 
 * Copyright (C) 2017 Murali Mutyala
 * All rights are reserved under MIT license
 * ----------------------------------------------------------------------
 * Created on 09/02/2017 by muralimutyala
 * ----------------------------------------------------------------------
 */

namespace App\Core;

class Database extends \mysqli
{
    public function __construct() 
    {
        parent::__construct(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
        
        if($this->connect_errno)
        {
            die('Database Connection failed: '. $this->connect_error);
        }
    }
}



