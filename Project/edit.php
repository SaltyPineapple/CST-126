
<!--
    Mark Pratt
    CST-126
    Project Version 7
    Synopsis: 
        This page is used to edit a post

-->

<?php
    require("utility.php");
    require("myfuncs.php");
    $con = dbConnect();

    $id=$_GET["postNum"];
    $username = getUserID();
    $postArr = array();
    

    $sql = "SELECT * FROM Posts where ID = $id";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) != 0){
        
        while($row = mysqli_fetch_assoc($result)){
            $postArr[0] = $row["Title"];
            $postArr[1] = $row["Post"];
        }
        
    }
    else{
        echo"Database not connected";
    }


?>

<!Doctype html>
<html>
    <head>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
        <title>CS126 Project</title>
    </head>
    <body>
        <form method="post" action="postHandlerEDIT.php?ID=<?php echo"".$id ?>">
            <label for="title">Title: </label>
            <br>
            <input type="text" name="title" value="<?php echo"".$postArr[0]; ?>">
            <br>
            <br>
            <label for="actualPost">Post (1000 character limit):</label>
            <br>
            <textarea  name="actualPost" rows="10" cols="50"><?php echo"".$postArr[1];?></textarea>
            <br>
            <input type="submit" value="Submit">
        
        </form>
    
    </body>
    

</html>