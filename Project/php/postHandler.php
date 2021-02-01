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

    if($title == null){
        echo"<script> 
            alert('Post needs a title');
            location.href='../html/post.php';  
        </script>";
    }
    else if($actualPost == null){
        echo"<script> 
            alert('Post cannot be blank');
            location.href='../html/post.php';  
        </script>";
    }
    else{
        // insert post into the table of the user
        $sql = "INSERT INTO Posts (Username, DatePosted, Title, Post, Likes) VALUES ('$username', CAST(CURRENT_TIMESTAMP AS DATE),'$title', '$actualPost', 0)";

        $result = mysqli_query(dbConnect(), $sql);

        // if the post is successful, take us to the page that displays all the users posts

        if($result){

            // take us to the page that displays the posts
            header("Location: ../html/displayPosts.php");


        }
        else {
            echo("Error description:");
        }
    }



?>