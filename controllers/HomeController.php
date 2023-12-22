<?php
class HomeController{
    public function getAbout(){
        return include "views/movies/about.php";
    }

    public function getContact(){
        return include "views/movies/contact.php";
    }
    public function getHome(){
        return include "views/movies/userhomepage.php";
    }
}


?>