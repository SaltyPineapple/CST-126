<!--
    Mark Pratt
    CST-126
    Project Version 8
    Synopsis: 
        Form for creating a comment
-->

<?php

    $postID = $_GET["postID"];
?>

<!Doctype html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- CSS LINK -->
        <link rel="stylesheet" href="styles.css" type="text/css">
        
        
        <title>CS126 Project</title>
    </head>
    <body>
        
        <form action="commentHandler.php?postID=<?php echo"".$postID; ?>" method="POST">
            <label for="comment">Comment:</label>
            <br>
            <textarea name="comment" rows="10" cols="40"></textarea>
            <br>
            <input type="submit" value="Comment">
            
        
        </form>
    
    </body>

</html>