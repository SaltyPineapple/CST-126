<!--
    Mark Pratt
    CST-126
    Project Version 8
    Synopsis: 
        Used to insert comments into a database
-->

<?php

    require('utility.php');
    require('myfuncs.php');

    $username = getUserID();
    $comment = $_POST["comment"];
    $postID = $_GET["postID"];

    if($comment == null){
        echo"<script>alert('Comment cannot be empty.')</script>";
    }
    else{

        $sql = "Insert into comments (DateCommented, Username, Comment, PostID) VALUES (CAST(CURRENT_TIMESTAMP AS DATE), '$username', '$comment', '$postID')";

        $result = mysqli_query(dbConnect(), $sql);

        if($result){
            header("Location: ../html/comments.php?postID=".$postID);
        }
        else{
            echo"Error " . mysqli_connect_error;
        }
    }


    


?>