<?php
// namespace Application\Web;

class Controller{
    protected static $path;

    protected static $routes;
    
    public $thsNs;

    public $data;

    protected static $hasTemplate = false;
    protected static $template = null;

 

    
  

     
    public function render_old($filename , $var = null , $print = true)
    {
        $renderData = $var;

        if (ALWAYS_RENDER_TO_TEMPLATE || self::$hasTemplate) {

            if (ALWAYS_RENDER_TO_TEMPLATE) {
                $selectedTemplate = self::$template;
                $templateFile = ($selectedTemplate != null) ? $selectedTemplate :TEMPLATE;
            }else{
                if (self::$hasTemplate) {
                    $selectedTemplate = self::$template;
                    $templateFile = $selectedTemplate ;
                }
            }
            $renderData['FileToInclude'] = $_SERVER['DOCUMENT_ROOT']. VIEW_PATH . ucfirst($filename);
        }else{
            $templateFile = $filename ;
        }

        $this->setViewToRender($templateFile , $renderData , $print);
    }

    public function setViewToRender($filename , $var = null , $print = true)
    {
         // $filename = $controller .".php";
        $file = $_SERVER['DOCUMENT_ROOT']. VIEW_PATH . ucfirst($filename);

        ($var != null) ? extract($var) : '';
        $obFile = NULL;   
        ob_start();

        include_once $file;

        $obFile = ob_get_clean();

        if ($print) {
            print $obFile;
        }
        return $obFile;
    }



    /**NEW */
    public static function getFileContent($filename)
    {
        $file = $filename;
        $fileSize = filesize($file);

        $handle = fopen($file, "r");
        $contents = fread($handle, $fileSize);
        fclose($handle);
        return $contents;
    }

    public static function includeFile($filename)
    {
        $file = $_SERVER['DOCUMENT_ROOT']. VIEW_PATH . ucfirst($filename);
        return self::getFileContent($file);
    }

    public function setTemplate($filename)
    {
        $file = $_SERVER['DOCUMENT_ROOT']. VIEW_PATH . ucfirst($filename);
        self::$hasTemplate = true;

        self::$template = $file;
    }

    public static function render($filename , $var = null , $print = true)
    {
        
        ($var != null) ? extract($var) : '';

        $obFile = NULL;   

        ob_start();

            $templateFile =  $_SERVER['DOCUMENT_ROOT']. VIEW_PATH .$filename ;
          
        require $templateFile;

        $obFile = ob_get_clean();

        if ($print) {
            print $obFile;
        }
        return $obFile;
       
    }
    
}