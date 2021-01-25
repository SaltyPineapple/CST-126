<!--
    Mark Pratt
    CST-126
    Project Version 7
    Synopsis: 
        Handler for when user makes new post
-->

<?php
        

    // this will grab the username from the session
    // allows us to use getUserID()
    require('utility.php');
    require("myfuncs.php");

    $username = getUserID();
    $title = $_POST["title"];
    $actualPost = $_POST["actualPost"];

    // insert post into the table of the user
    $sql = "INSERT INTO Posts (Username, DatePosted, Title, Post, Likes) VALUES ('$username', CAST(CURRENT_TIMESTAMP AS DATE),'$title', '$actualPost', 0)";

    $result = mysqli_query(dbConnect(), $sql);

    // if the post is successful, take us to the page that displays all the users posts

    if($result){
        
        // take us to the page that displays the posts
        header("Location: displayPosts.php");

        
    }
    else {
        echo("Error description:");
    }


?>