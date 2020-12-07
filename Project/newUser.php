<?php
    // connection
    $con = mysqli_connect('localhost', 'root', 'root', 'project');

    // run connection and see if successful
    if(!$con){
        die("Database not connected" . mysqli_connect_error);
    }

    // to get here, connection is successful
    echo "Connection successful";

    // grab items from html form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    // sql query
    $sql = "INSERT INTO users (username, email, age) VALUES ('$username', '$email', '$age')";

    // run sql query
    if(mysqli_query($con, $sql)){
        echo "Successfully registered";
    }
    else {
        echo "ERROR: SQL not exectued $sql" . mysqli_error($con);
    }

    mysqli_close($con);



?>