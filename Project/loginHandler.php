<!--
    Mark Pratt
    CST-126
    Project Version 7
    Synopsis: 
        Used to handle log in requests

-->

<?php
    require('utility.php');

    // grab items from POST
    $username = $_POST["username"];
    $pass = $_POST["pass"];

    // error handling and validation
    if($username == NULL){
        echo "Username cannot be blank";
    }
    else if($pass == NULL){
        echo "Password cannot be blank";
    }
    else{
        // SQL to grab from database
        $sql = "SELECT * FROM users WHERE Username='$username' AND Password='$pass'";
        
        $result = mysqli_query(dbCOnnect(), $sql);
        
        // check if any rows match user and pass
        if(mysqli_num_rows($result) > 0){
            echo "Log in successful";
            
            $row = $result->fetch_assoc();
            saveUserId($row["Username"]);
            
            // reidirects to the post page
            header("Location: home.php");
        }
        else {
            echo "Login failed";
            echo "<br>";
            echo "<a href='login.html'>Try Again</a>";
        }
        
    }

    function saveUserID($id){
        session_start();
        
        $_SESSION["$_USERID"] = $id;
        
    }
    



?>
