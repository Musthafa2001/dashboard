<?php

if(Session::isauthenticated()){

session::load("index/__upload");
}
else{
session::load("index/__calltoaction");

}



session::load('index/__photogram') 

?>


