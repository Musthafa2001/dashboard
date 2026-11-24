<?php

class WebAPI
{

    public function __construct()
    {
        // print("session initiated");
        // hello
    }
    public function initiateSession()
    {

        Session::start();
        print("initiated new session");

        if(session::isset('sessiontoken')){

        $result=Usersession::authorization(Session::getvalue('sessiontoken'));

    //   print_r(session::$userdata);
       

        }

        
    }
}
