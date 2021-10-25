<?php

class Session 
{

    public function __construct()
    {
      
    }

    public static function checkSession($name = null)
    {
        if ($name == null) {
           return ($_SESSION) ? true : false;
        }
        return (isset($_SESSION[$name])) ? $_SESSION[$name] : false;
    }

    public static function setSession($sessionName , $value)
    {
        $_SESSION[$sessionName] = $value;
        return true;
    }

    public static function unset($sessionName = null)
    {
        if ($sessionName == null) {
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
        }else{
                unset($_SESSION[$sessionName]);
        }
        
        session_unset();
    }

    public static function destroy()
    {
        session_destroy();
    }

    public static function verifySession($sessionName , $value)
    {
        
    }

    public static function checkAccess()
    {
       if (!Session::checkSession()) {
          header('location:login');
       }
    }
    
}
