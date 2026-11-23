<?php

class WebAPI
{

    public function __construct()
    {
        // print("session initiated");
    }
    public function initiateSession()
    {

        Session::start();

        if(session::isset('sessiontoken')){

        $result=Usersession::authorization(Session::getvalue('sessiontoken'));

    //   print_r(session::$userdata);
       

        }

        
    }
}
