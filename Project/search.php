<!--
    Mark Pratt
    CST-126
    Project Version 8
    Synopsis: 
        Form used to search through posts
-->

<!Doctype HTML>
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
        
        <form method="post" action="searchHandler.php">
            <input type="radio" name="searchType" value="Username" id="username">
            <label for="username">Username</label>
            
            <br>
            
            <input type="radio" name="searchType" value="Post" id="post">
            <label for="post">Post</label>
            
            <br>
            
            <input type="radio" name="searchType" value="Title" id="title">
            <label for="title">Title</label>
            
            <br>
            
            <label for="searchTerm">Search Term: </label>
            <br>
            <input type="text" name="searchTerm">
            
            <input type="submit" value="Search">
        
        
        </form>
        
    
    </body>

</html>