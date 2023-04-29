<?php 
namespace App\Models;


class UserModel extends BaseModel{
    
    
    protected static $table = 'users';
    
    
    public static function create(array $data){
        
        $user = \ORM::for_table('users')->create();
        
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = '';
        $user->save();
        
        $role = \ORM::for_table('user_role')->create();
        $role->user_id=$user->id();
        $role->role_id=1;
        $role->save();
        
        return $user->id();
    }
    
    
    public static function login($data){
        return true;
    }
    
    
    
    
    
}