<!--
    Mark Pratt
    CST-126
    Project Version 5
    Synopsis: 
        Used to handle post deletion requests
-->

<?php
    require("utility.php");
    require("myfuncs.php");
    $con = dbConnect();

    $id = $_GET["postNum"];
    $username = getUserID();



    $sql = "DELETE FROM $username WHERE ID = '$id'";

    $result = mysqli_query($con, $sql);

    if($result){
        header("Location: displayPosts.php");
    }
    else{
         echo"Database not connected" . mysqli_connect_error;
    }
    



?>