<?php
class AuthHelpers{


    static public function getSession() {
        if(session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    static public function checkLogged() {
        self::getSession();
        if(!isset($_SESSION["IS_LOGGED"])) {
            header("Location: " . BASE_URL . "login");
        }else{
            return true;
        }
    }
static public function isLogged() {
    self::getSession();
        if(!isset($_SESSION["IS_LOGGED"])) {
            return false;
        }else{
            return true;
        }
    }
static function userName() {
        if(session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if(!isset($_SESSION["USERNAME"])) {
            return false;
        }else{
            return $_SESSION['USERNAME'];
        }
    }
    static function userRole(){
        self::getSession();
        if(session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if(!isset($_SESSION["ROLE"])) {
            return false;
        }else{
            return $_SESSION['ROLE'];
        }

    }


}