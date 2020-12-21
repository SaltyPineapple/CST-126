<?php
    
    $con = mysqli_connect('localhost', 'root', 'root', 'project');

    if(!$con){
        die("Database not connected" . mysqli_connect_error);
    }       

    // this will grab the username from the session
    // allows us to use getUserID()
    require_once("myfuncs.php");

    $username = getUserID();
    $title = $_POST["title"];
    $actualPost = $_POST["actualPost"];

    // insert post into the table of the user
    $sql = "INSERT INTO $username (Username, Date, Title, Post) VALUES ('$username', CAST(CURRENT_TIMESTAMP AS DATE),'$title', '$actualPost')";

    $result = mysqli_query($con, $sql);

    // if the post is successful, take us back to home.
    // will implement blog viewing pages in future milestone
    if($result){
        echo "post made successfully!";
        
        echo "<a href='index.html'>Home</a>";
    }
    else {
        echo("Error description: " . mysqli_error($con));
    }

    // close connection
    mysqli_close($con);

?>