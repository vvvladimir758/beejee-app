<?php 

namespace  Config;

use j4mie\idiorm;

class DatabaseConfig {
    

     
    
    protected static function connectDb(){ 
    \ORM::configure('mysql:host=localhost;dbname=beejee_test');
    \ORM::configure('username', 'root');
    \ORM::configure('password', '');
    }
    
    public static function init(){
        self::connectDb();
    }
    
    
}



?>