<?php


class Session
{

public static $userdata=null;

    public static function start()
    {
        session_start();
    }

    public static function unset()
    {
        session_unset();
    }
    public static function destroy()
    {
        session_destroy();
    }
    public static function getvalue($key)
    {
        if (Session::isset($key)) {
            return $_SESSION[$key];
        }
    }
    public static function isset($key)
    {
        if (isset($_SESSION[$key])) {
            return true;
        } else {
            return false;
        }
    }
    public static function setvalue($key, $value = 0)
    {
        $_SESSION[$key] = $value;
    }

    public static function load($name)

    {
        // print($_SERVER['DOCUMENT_ROOT']);
        include $_SERVER["DOCUMENT_ROOT"]. "/app/__templates/$name.php";
    }

    public static function renderPage()
    {
        Session::load('_master');
    }
    public static function currentScript(){
        return basename($_SERVER['PHP_SELF'],'.php');
    }

    public static function isauthenticated(){
        //    if(Usersession::isvalid(
            return Usersession::isvalid();
           }


        
    
}
