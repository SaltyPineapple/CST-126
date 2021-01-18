<!--
    Mark Pratt
    CST-126
    Project Version 5
    Synopsis: 
        Handles new user registration form
-->


<?php
    $con = mysqli_connect('localhost', 'root', 'root', 'project');

    if(!$con){
        die("Database not connected" . mysqli_connect_error);
    }

    
    // grab items from POST
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    // SQL for error handling and validation
    $sqlUsernameCheck = "SELECT * FROM users WHERE Username='$username'";
    $sqlEmailCheck = "SELECT * FROM users WHERE Email='$email'";
    
    $resultUsername = mysqli_query($con, $sqlUsernameCheck);
    $resultEmail = mysqli_query($con, $sqlEmailCheck);
    
    if(mysqli_num_rows($resultUsername) > 0){
        die("Someone is already using that username");
    }
    if(mysqli_num_rows($resultEmail) > 0){
        die("That Email is already in use");
    }
    

    // SQL to insert new uer into table
    $sql = "INSERT INTO users (Username, Password, Email, Age) VALUES ('$username', '$pass','$email', '$age')";

    $result = mysqli_query($con, $sql);

    if($result){
        echo "Successfully registered";
        
        // creates a table for the user
        $newTable = "CREATE TABLE $username ( 
        ID INT NOT NULL AUTO_INCREMENT , 
        Username VARCHAR(16) NOT NULL , 
        Date VARCHAR(10) NOT NULL , 
        Title VARCHAR(50) NOT NULL , 
        Post VARCHAR(1000) NOT NULL , 
        PRIMARY KEY (ID)) ENGINE = InnoDB;";
        if(mysqli_query($con, $newTable)){
            echo"Correct";
            
            
            // redirects to the login page
            header("Location: login.html");
        }
        else{
            echo("Error description: " . mysqli_error($con));
        }
        
    }
    else {
        echo "ERROR: SQL not exectued $sql" . mysqli_error($con);
    }

    // close connection
    mysqli_close($con);



?>