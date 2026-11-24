<?php

class WebAPI
{

    public function __construct()
    {
      
    }
    public function initiateSession()
    {

        Session::start();
        print("cool yes");

        print("initia new session");
    print("new version");


        if(session::isset('sessiontoken')){

        $result=Usersession::authorization(Session::getvalue('sessiontoken'));

    //   print_r(session::$userdata);
       

        }

        
    }
}
