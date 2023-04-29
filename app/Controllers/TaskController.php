<?php 
namespace App\Controllers;

use App\Models\TaskModel;
use App\Validator;

class TaskController extends BaseController{
    
    use Validator;
    
    
    public function viewAllTasks(){
     
     
       $this->tasksSessions();
     
      
        if(!isset($this->params[0])){
        $this->params[0] = 1;    
        }
        
        $tasks = TaskModel::tasks($this->params);
        
        $page = $this->params[0];
        
        $orderType = 'desc';
        
        if(isset($this->params[2])){
            $orderType = $this->params[2];
        }
        
        $pageCount = TaskModel::tasksPageCount();
        
        $this->render('main', compact('tasks','page','pageCount','orderType'));
            
    }
    
    private function tasksSessions(){
        
        if(isset($this->params[1]) && isset($this->params[2])){
            $_SESSION['sortFields'] = [
                'column' =>$this->params[1],
                'order_type'=>$this->params[2]
            ];
            
        }
        else{
            
            if(isset($_SESSION['sortFields'])){
                
                $this->params[1] = $_SESSION['sortFields']['column'];
                $this->params[2] = $_SESSION['sortFields']['order_type'];
                
            }
            
        }
        return; 
    }
    
    
    public function create(){
     
        
        $this->render('create');
    }
    
    public function store(){
        
        $error = '';   
        
        if(!$this->validateEmail($_POST['email']))
            $error.="Не правильно указан email !\r\n";
        
        if(!$this->validateName($_POST['name']))
        $error.="Не правильно указано имя (длина должна быть от 3 до 15 символов)   !\r\n";
        
        if(!$this->validateText($_POST['descripition']))
            $error.="Не правильно указан текст (длина должна быть от 3 символов)   !\r\n";
            
        
            $data= [
                'name'=>$_POST['name'],
                'email'=>$_POST['email'],
                'descripition'=>$_POST['descripition']
            ];
            
            
        if(strlen($error)>1){
            $this->error = $error;
            $this->render('create',['name'=>$data['name'], 'email'=>$data['email'], 'descripition'=>$data['descripition']]);
        }
        
        
        //данные прошли валидацию 
        //  Вставляться будут через библеотеку idiorm - защищенную от SQL injection
        // конечно можно написать отдельный класс  Request, но на это нужно еще время ... 
        
       
        
        if(TaskModel::store($data)){
            $this->message = "Задача добавлена";
            $this->viewAllTasks();
        }
        
        
    }
    
    
    
}