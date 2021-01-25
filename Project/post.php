<!--
    Mark Pratt
    CST-126
    Project Version 5
    Synopsis: 
        Page where user creates new post

-->

<!Doctype html>
<html>
    <head>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
        <title>CS126 Project</title>
    </head>
    <body>
        <form method="post" action="postHandler.php">
            <label for="title">Title: </label>
            <br>
            <input type="text" name="title">
            <br>
            <br>
            <label for="actualPost">Post (1000 character limit):</label>
            <br>
            <textarea  name="actualPost" rows="10" cols="50"></textarea>
            <br>
            <input type="submit" value="Create Post">
        
        </form>
        
        <a href="home.php">Cancel</a>
    
    </body>
    

</html>