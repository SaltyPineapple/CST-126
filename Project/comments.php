<!--
    Mark Pratt
    CST-126
    Project Version 8
    Synopsis: 
        Used to display all the coments on a post
-->


<?php
    require('utility.php');
    require('myfuncs.php');
    $postID = $_GET["postID"];
    $comments = getAllComments($postID);
    $username = getUserID();
    
    $singlePost = getSinglePost($postID);
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
        
        <table>
            <tr>
                <th>Post</th>
            </tr>
            <tr>
                <?php
                    echo"<td>";
                        echo"".$singlePost[0][0];
                    echo"</td>";
                ?>
            </tr>
            
        </table>
        <br>
        <table>
            <tr>
                <th>Date</th>
                <th>Username</th>
                <th>Comment</th>
            </tr>
            <?php
                for($x=0; $x<count($comments); $x++){
                    echo"<tr>";
                        echo"<td class='date'>".$comments[$x][0]."</td>";
                        echo"<td>".$comments[$x][1]."</td>";
                        echo"<td class='realPosts'>".$comments[$x][2]."</td>";
                    echo"</tr>";
                    
                }
            
            ?>
            
        
        </table>
        
        <a href="createComment.php?postID=<?php echo"".$postID; ?>">Create Comment</a>
        <br>
        <br>
        <a href="displayAllPosts.php">Back to Feed</a>
    
    
    </body>

</html>