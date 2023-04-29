<?php 
namespace App\Controllers;



class ApplicationController extends BaseController {
    
 
    
    public function run(){
      
       $this->router->run(); 
          
      
    }
    
    
    
    public function main(){
      
        $taskController = new TaskController($this->params);
        $taskController->viewAllTasks();
     
    }
    
    public function page404(){
        
        echo " Страница сгенерирована скриптом 404";
        exit();
    }
    
    
    
    
}