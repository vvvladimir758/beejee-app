<?php 
namespace App\Controllers;

use Illuminate\View\Factory;
use Illuminate\View\View;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\ViewFinderInterface;
use Jenssegers\Blade\Blade;
use Config\SiteConfig;
use App\Router;

class BaseController {
    
    /**
     * @var Blade
     */
    private $blade;
    protected $params;
    protected $user;
    
    protected $error;
    protected $message;
    protected $router;
    
    public function __construct($params=[]){
        

        $this->params = $this->paramsFilter($params);

        $this->router = Router::singleton();
       
    }
    
    
    protected  function paramsFilter(array $params){
        foreach($params as $key=>$val){
            if(property_exists(self::class, $key))
           {
            $this->$key = $val;
            unset($params[$key]);
           
           }
        }
        

        $params = array_values($params);

        return $params;
    }
    
    function render($pageName, array $data = array()){
        
        $this->blade = new Blade('app/views','app/cache');
        $data['sitePath']=SiteConfig::$siteUrl;
        if($this->user==1){
            $data['admin']=1;
        }
        
        if(isset($this->message)){
            $data['message']=$this->message;
        }
        
        if(isset($this->error)){
            $data['message']=$this->error;
        }
        
        echo $this->blade->make($pageName, $data)->render();
        $this->afterRender();
        exit();
    }
    
    protected function afterRender(){
        //действия после загрузки
    }
    
    
  
    
    
}