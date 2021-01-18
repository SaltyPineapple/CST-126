<!--
    Mark Pratt
    CST-126
    Project Version 5
    Synopsis: 
        Used for session functions
-->

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