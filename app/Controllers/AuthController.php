<?php 
namespace App\Controllers;

use App\Validator;
use App\Models\UserModel;

class AuthController extends  BaseController{
    
    use Validator;
    
    public function login(){
        
        $this->render('login');
    }
    
    
    public function authentificate(){
              
           $error = '';
        

            if(!$this->validateName($_POST['login']))
                $error.="Не правильно указано имя (длина должна быть от 3 до 15 символов)   !\r\n";
                
                if($_POST['login']!='admin')
                    $error.="Неверный логин   !\r\n";
                
           if($_POST['password']!='123')
                    $error.="Неверный пароль   !\r\n";
                    
              
                    $data= [
                        'login'=>$_POST['login'],
                        'password'=>$_POST['password']
                    ];
                    
                    
                    
                    
                    
                    if(strlen($error)>1){
                        $this->error = $error;
                        $this->render('login',['login'=>$data['login'], 'password'=>$data['password']]);
                    }
                    
                    
            
                    
                    
                    if(UserModel::login($data)){
                   
                        $this->message = "Добрый день , Админ";
                        $this->router->route('main',['message'=> $this->message]);
                    }
                    
    }
    
    private function adminSessionStart(){
            
            $_SESSION['admin'] = 1;
    }
    
    private function adminSessionEnd(){
        
        unset($_SESSION['admin']);
    }
    
    
}