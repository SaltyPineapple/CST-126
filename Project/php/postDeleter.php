<!--
    Mark Pratt
    CST-126
    Project Version 7
    Synopsis: 
        Used to handle post deletion requests
-->

<?php
    require("utility.php");
    require("myfuncs.php");
    $con = dbConnect();

    $id = $_GET["postNum"];
    $username = getUserID();



    $sql = "DELETE FROM Posts WHERE ID = '$id'";
    $sqlComments = "DELETE FROM comments where PostID = '$id'";

    $result = mysqli_query($con, $sql);
    $resultComments = mysqli_query($con, $sqlComments);


    

    if($result && $resultComments){
        header("Location: ../html/displayPosts.php");
    }
    else{
         echo"Database not connected" . mysqli_connect_error;
    }
    



?>