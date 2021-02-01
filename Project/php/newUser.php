<!--
    Mark Pratt
    CST-126
    Project Version 7
    Synopsis: 
        Handles new user registration form
-->


<?php
   
    require('utility.php');
    
    // grab items from POST
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    // SQL for error handling and validation
    $sqlUsernameCheck = "SELECT * FROM users WHERE Username='$username'";
    $sqlEmailCheck = "SELECT * FROM users WHERE Email='$email'";
    
    $resultUsername = mysqli_query(dbConnect(), $sqlUsernameCheck);
    $resultEmail = mysqli_query(dbConnect(), $sqlEmailCheck);
    
    if(mysqli_num_rows($resultUsername) > 0){
        die("Someone is already using that username");
    }
    if(mysqli_num_rows($resultEmail) > 0){
        die("That Email is already in use");
    }
    

    // SQL to insert new uer into table
    $sql = "INSERT INTO users (Username, Password, Email, Age) VALUES ('$username', '$pass','$email', '$age')";

    $result = mysqli_query(dbConnect(), $sql);

    if($result){
        echo "Successfully registered";
        
        // redirects to the login page
        header("Location: ../html/login.html");
        
    }
    else {
        echo "ERROR: SQL not exectued $sql" . mysqli_error(dbConnect());
    }



?>