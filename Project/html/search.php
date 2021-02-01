<!--
    Mark Pratt
    CST-126
    Project Version 8
    Synopsis: 
        Form used to search through posts
-->

<?php
    require('../php/myfuncs.php');
    $username = getUserID(); 
?>

<!Doctype HTML>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- CSS LINK -->
        <link rel="stylesheet" href="../css/styles.css" type="text/css">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        
        <title>CS126 Project</title>
    </head>
    <body>
        
        <header>
            <h3>CST-126 Blog Project</h3>
        </header>
        
        <div id="logs">
        
            <?php 
                echo"<h2><i class='fas fa-user-circle icon'></i> ".$username."</h2>";

            ?>
        
        </div>
        
        <form method="post" action="../php/searchHandler.php">
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