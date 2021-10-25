<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



   // $_SESSION['user_login'] = '123';REQUEST_URI
//    echo (isset($_SERVER['REQUEST_METHOD'])) ? $_SERVER['REQUEST_METHOD'] :"no request method";
//    echo (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] :"no request URI";
//    echo (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] :"no request PATH";
    
    include_once 'application/Config/Config.php';
    include 'system/webengine/Engine.php';

   function base_url($url)
   {
      $protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
      return $protocol.$_SERVER['HTTP_HOST'].FOLDER_PATH.$url;
   }

    // $_SESSION['path_info'] = 'login/showForm';

    $c = new Engine();//CallObject();
    $c->CallObject();

 
    // $paths = $c->setPathInfo();

    // $extracted_paths = $c->extractPaths();
    //$c->CallObject();

   // Tools::showArray($extracted_paths);

   // $included_files = get_included_files();

   // foreach ($included_files as $filename) {
   //    echo "$filename<br>";
   // }

   //print_r( error_get_last() );
    

    