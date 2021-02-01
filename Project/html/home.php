<!--
    Mark Pratt
    CST-126
    Project Version 5
    Synopsis: 
        This is the home screen
-->

<?php
    require('../php/myfuncs.php');
    $username = getUserID(); 
?>

<!Doctype html>
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
        
        <a href="displayAllPosts.php">View Feed</a>
        
        <a href="post.php">Make New Post</a>
        
        <a href="displayPosts.php">View Your Posts</a>
        
        <a href="login.html">Log out</a>
    </body>


</html>