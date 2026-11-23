<?php

include "libs/load.php"; 

if(isset($_GET['logout']) ){
        session::unset();
        // session::setvalue("sessiontoken")
        session::destroy();
       header('Location: index.php');
    
    
}

Session::renderPage();

