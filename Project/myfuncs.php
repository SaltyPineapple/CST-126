<?php

    function saveUsername($username){
        session_start();
        
        $_SESSION["$_USERID"] = $username;
        
    }

    function getUserID(){
        session_start();
        
        return $_SESSION["$_USERID"];
    }



?>