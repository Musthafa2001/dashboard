<?php

class WebAPI
{

    public function __construct()
    {
      
    }
    public function initiateSession()
    {

        Session::start();
        print("again initiated");
        print("initiated new session");

        if(session::isset('sessiontoken')){

        $result=Usersession::authorization(Session::getvalue('sessiontoken'));

    //   print_r(session::$userdata);
       

        }

        
    }
}
