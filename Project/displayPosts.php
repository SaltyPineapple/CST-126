
<!--
    Mark Pratt
    CST-126
    Project Version 7
    Synopsis: Page to display users posts and user administration controls

-->

<?php
    // require functions are here to grab needed functions
    // gets username from session as well
    require('utility.php');
    require_once('myfuncs.php');
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
        <link rel="stylesheet" href="styles.css" type="text/css">
        
        
        <title>CS126 Project</title>
    </head>
    
    <body>
             
        
        <a href="post.php">Make New Post</a>
        <a href="deletePost.php">Delete a Post</a>
        <a href="postEditor.php">Edit a Post</a>
        <a href="displayAllPosts.php">View Post Feed</a>
        
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
                        echo"<a href='edit.php?postNum=".$users[$x][4]."'>Edit Post</a>";
                        echo"<br>";
                        echo"<a href='postDeleter.php?postNum=".$users[$x][4]."'>Delete Post</a>";
                        echo"</td>";
                  
                    echo"</tr>";
                    
                }
               
            
            ?>
            
            
            
        
        </table>
    
        <a href="home.php">Home</a>
    </body>


</html>