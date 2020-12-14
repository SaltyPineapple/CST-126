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

    if(mysqli_query($con, $sql)){
        echo "Successfully registered";
    }
    else {
        echo "ERROR: SQL not exectued $sql" . mysqli_error($con);
    }

    // close connection
    mysqli_close($con);



?>