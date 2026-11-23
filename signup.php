<?php 
include "libs/load.php";
if(Session::isauthenticated()){
    header("Location: index.php");
    die();
}

Session::renderPage();


?>