<!--
    Mark Pratt
    CST-126
    Project Version 7
    Synopsis: 
        Used to update the likes on a post
-->

<?php
    require('utility.php');

    $postID = $_GET["postID"];

    $sql = "Update Posts
            SET Likes = Likes + 1
            where ID = $postID";

    

    $result = mysqli_query(dbConnect(), $sql);

    if($result){
        header("Location: ../html/displayAllPosts.php");
    }


?>