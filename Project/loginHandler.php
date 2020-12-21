<?php
    // connection string
    $con = mysqli_connect('localhost', 'root', 'root', 'project');

    // check if connection is successful
    if(!$con){
        die("Database not connected" . mysqli_connect_error);
    }

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
        
        $result = mysqli_query($con, $sql);
        
        // check if any rows match user and pass
        if(mysqli_num_rows($result) > 0){
            echo "Log in successful";
            
            $row = $result->fetch_assoc();
            saveUserId($row["Username"]);
            
            // reidirects to the post page
            header("Location: post.php");
        }
        else {
            echo "Login failed";
        }
        
    }

    function saveUserID($id){
        session_start();
        
        $_SESSION["$_USERID"] = $id;
        
    }
    
    
    // close connection
    mysqli_close($con);



?>