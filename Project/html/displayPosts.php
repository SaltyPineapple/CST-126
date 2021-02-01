
<!--
    Mark Pratt
    CST-126
    Project Version 7
    Synopsis: Page to display users posts and user administration controls

-->

<?php
    // require functions are here to grab needed functions
    // gets username from session as well
    require('../php/utility.php');
    require_once('../php/myfuncs.php');
    $username = getUserID();
    $users = getUserPosts($username);

?>

<!DOCTYPE html>
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
        
        <div id="postTable">
            <table>
                <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Post</th>
                    <th>Likes</th>
                    <th></th>
                </tr>
                <?php
                    // loop through the users database
                    // output the posts in readable format
                    for($x=0; $x<count($users); $x++){
                        echo"<tr>";
                            echo"<td class='date'>".$users[$x][0]."</td>";
                            echo"<td>".$users[$x][1]."</td>";
                            echo"<td class='realPosts'>".$users[$x][2]."</td>";
                            echo"<td>".$users[$x][3]."</td>";
                            echo"<td>";
                            echo"<a href='edit.php?postNum=".$users[$x][4]."' class='tableButton'>Edit Post</a>";
                            echo"<br>";
                            echo"<a href='../php/deleteHandler.php?postNum=".$users[$x][4]."' class='tableButton'>Delete Post</a>";
                            echo"</td>";

                        echo"</tr>";

                    }


                ?>




            </table>
        </div>
        
        <a href="post.php">Make New Post</a>
        
        <a href="displayAllPosts.php">View Post Feed</a>
    
        <a href="home.php">Home</a>
    </body>


</html>