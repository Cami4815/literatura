<?php
class AuthHelpers{
static function checkLoggead(){
    if(session_status()!=PHP_SESSION_ACTIVE){
        session_start();

    }
    if(!isset($_SESSION['IS_LOGGED'])){
        header("Location:". BASE_URL . "login");
         }else{
            return true;
         }
    }
    static function isLogged(){
        if(session_status()!=PHP_SESSION_ACTIVE){
            session_start();
         } if(!isset($_SESSION['IS_LOGGED'])){
                header("Location:". BASE_URL . "login");
             return false;
                 }else{
                return true;
    }
}
 }