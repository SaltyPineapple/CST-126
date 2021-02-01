<!--
    Mark Pratt
    CST-126
    Project Version 7
    Synopsis: 
        Handles edited and updated posts queries and such
-->

<?php     

    // allows us to use getUserID()
    // allows us to use dbConnect()
    require('utility.php');
    require("myfuncs.php");

    $username = getUserID();
    $title = $_POST["title"];
    $actualPost = $_POST["actualPost"];
    $id = $_GET["ID"];

    if($title == null){
        echo"<script> 
            alert('Post needs a title');
            location.href='../html/edit.php?postNum=$id';  
        </script>";
    }
    else if($actualPost == null){
        echo"<script> 
            alert('Post cannot be blank');
            location.href='../html/edit.php?postNum=$id';  
        </script>";
    }
    else{

        $sql = "UPDATE Posts
                SET Title='$title', Post='$actualPost', DatePosted=CAST(CURRENT_TIMESTAMP AS DATE) 
                WHERE ID=$id";


        $result = mysqli_query(dbConnect(), $sql);

        // if the post is successful, take us to the page that displays all the users posts

        if($result){

            // take us to the page that displays the posts
            header("Location: ../html/displayPosts.php");


        }
        else {
            echo("Error description: " . mysqli_error($con));
        }
    }


?>