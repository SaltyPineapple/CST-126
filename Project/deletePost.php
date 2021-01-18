<!--
    Mark Pratt
    CST-126
    Project Version 5
    Synopsis: Form used to select post to delete

-->
<!DOCTYPE html>
<html>
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- CSS LINK -->
        <link rel="stylesheet" href="styles.css" type="text/css">
        
        <script src='delete.js'></script>
        
        <title>CS126 Project</title>
    </head>
    
    <body>
        <form action="postDeleter.php" method="get">
            <label for="postNum">Post Number: </label>
            <input type="text" name="postNum">
            <input type="submit" value='Submit'>
        </form>
        
    </body>
</html>