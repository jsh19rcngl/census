<?php

class Engine{

    protected static $paths;

    protected static $routes;
    
    public $thsNs;

    public  static  $autoLoadpage = true ;

    public function __construct()
    {
       include 'application/Config/Routes.php';

        //
        
        spl_autoload_register(function ($classname)
        {

            $paths = array(WEB_ENGINE , SYSTEM_PATH , LIBRARIES , CONTROLLER_PATH ,MODEL);
            $t = 0 ; 
            foreach ($paths as $key => $path) {
               
                $filePath = $_SERVER['DOCUMENT_ROOT'] .  $path . ucfirst($classname).".php";
                if(file_exists($filePath)){
                    include $filePath;
                    break;
                }
                 $t++;
            }
            if ($t >= count($paths)) {
                 die("<br> <b> <h2>404 Page</h2> <br>File ".$filePath  ."</b> not found.");
            }
        });

    }

    public static function setPathInfo()
    {
        $path_info = Session::checkSession('path_info');

        if($path_info){
            $url = explode('/' , ltrim($path_info , '/') ) ;
        }else{
             $url  = isset($_SERVER['PATH_INFO'])? explode('/' , ltrim($_SERVER['PATH_INFO'] , '/') ) :array( '/');
        }

        $mainUrl = array();

        if (is_array($url)) {
           
            foreach ($url as $key => $value) {
                $v = trim($value);
                if ($v) {
                    $mainUrl[] = $v;
                }
            }
            
            self::$paths = $mainUrl;
             
        }

        return $mainUrl;
       
    }

    public static function extractPaths($paths = null)
    {
        
        $url = ($paths != null) ? $paths : self::setPathInfo();

        $requestObj = $requestMethod = null ; 
        $parameters = array();

        if (is_array($url)) {
                
            $requestObj = (isset($url[0]) && $url[0] !== '/') ? $url[0] : 'index';
            $requestMethod = (isset($url[1])) ? $url[1] : 'index';

            $cUrl = count($url);
                
            if ($cUrl > 2) {
                for ($i=2; $i < $cUrl; $i++) { 
                    array_push( $parameters , $url[$i]);
                }
            }
        }

        $return = array('Object' => $requestObj , 'Method' => $requestMethod , 'Parameters' => $parameters);
        // print_r($return);
        return $return;
    }

    public static function CallObject($Objs = null)
    {

            $arrayObjs = ($Objs !== null) ? $Objs : self::extractPaths();
            
            $obj =  $arrayObjs['Object'];
            $method = $arrayObjs['Method']; 

            $parameters = ($arrayObjs['Parameters']) ? $arrayObjs['Parameters'] : '';
            if (self::isControllerExists($obj) ) {
                self::includeController($obj);
                $uobj = new $obj; 

                if(method_exists($uobj,$method)){

                    if ($parameters) {
                        # code...
                        $arrParams = $parameters;//explode(',' , $parameters);
                        call_user_func_array(array($uobj ,$method) , $arrParams);
                        
                    }else{
                        $uobj->$method();
                    }

                    
                }else{
                     http_response_code(404);
                     //echo " <b> " .$_SERVER['REQUEST_METHOD'] ." :".$obj."/" . $method . " </b> not found";
                      self::includeFile('application/View/Error/404.php');
                }
            }else{
                http_response_code(404);
                //echo " <b> " .$_SERVER['REQUEST_METHOD'] ." :".$obj."/" . $method . " </b> not found";
                 self::includeFile('application/View/Error/404.php');
            }
      
            
    }

    protected static function isControllerExists($controller)
    {
        $filename = $controller .".php";
        $file = $_SERVER['DOCUMENT_ROOT']. CONTROLLER_PATH . ucfirst($filename);
        if (file_exists($file)) {
             return true;
        }else{
            return false;
        }
    }

    public static function includeFile($filename)
    {
        include_once $filename;
    }

    public static function includeController($controller)
    {
        $filename = $controller .".php";
        $file = $_SERVER['DOCUMENT_ROOT']. CONTROLLER_PATH . ucfirst($filename);
        require_once $file;
    }

    public function throw404($msg = null)
    {
        http_response_code(404);

        echo $this->getFileContent('application/View/Error/404.html');
    }

    public static function getFileContent($filename)
    {
        $file = $filename;
        $fileSize = filesize($file);

        $handle = fopen($file, "r");
        $contents = fread($handle, $fileSize);
        fclose($handle);
        return $contents;
    }

    
}