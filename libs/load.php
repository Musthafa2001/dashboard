<?php
include "include/Database.class.php";
include "include/Session.class.php";
include "include/User.class.php";
include "include/Usersession.class.php";
include "include/Webapi.class.php";

$webapi = new WebAPI;

$webapi->initiateSession();


function load($name)
{
  include __DIR__ . "/../__templates/$name.php";
}


// signup("basith",123456789,"basith@gmail.com",123456789);