
<!--
    Mark Pratt
    CST-126
    Project Version 5
    Synopsis: Page to display users posts and user administration controls

-->

<?php
    // require functions are here to grab needed functions
    // gets username from session as well
    require('utility.php');
    require_once('myfuncs.php');
    $username = getUserID();
    $users = getAllPosts($username);
    /*$deletePost = deletePost($users[1][2], $username);*/



?>

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
        
        
    <!--

        We will have the user controls here
        types of controls:
            - Edit
            - Delete
            - Add


        

    -->        
        
        <a href="post.php">Make New Post</a>
        <a href="deletePost.php">Delete a Post</a>
        <a href="postEditor.php">Edit a Post</a>
        
        <table>
            <tr>
                <th></th>
                <th>Date</th>
                <th>Post</th>
            </tr>
            <?php
                // loop through the users database
                // output the posts in readable format
                for($x=0; $x<count($users); $x++){
                    echo"<tr>";
                        echo"<td>".$users[$x][2]."</td>";
                        echo"<td class='date'>".$users[$x][0]."</td>"."<td class='realPosts'>".$users[$x][1]."</td>";
                    echo"</tr>";
                    
                }
               
            
            ?>
        
        
        </table>
    
        <a href="home.php">Home</a>
    </body>


</html>