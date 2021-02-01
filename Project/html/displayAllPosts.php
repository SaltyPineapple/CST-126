<!--
    Mark Pratt
    CST-126
    Project Version 7
    Synopsis: Page to display All posts and user administration controls

-->

<?php
    require('../php/utility.php');
    require_once('../php/myfuncs.php');
    $posts = getEveryPost();
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
    
        <div id="postTable">
            <table>
                <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Username</th>
                    <th>Post</th>
                    <th>Likes</th>
                    <th>Comments</th>
                </tr>
                <?php
                    // loop through the users database
                    // output the posts in readable format
                    for($x=0; $x<count($posts); $x++){
                        echo"<tr>";
                            echo"<td class='date'>".$posts[$x][0]."</td>";
                            echo"<td>".$posts[$x][1]."</td>";
                            echo"<td>".$posts[$x][2]."</td>";
                            echo"<td class='realPosts'>".$posts[$x][3]."</td>";
                            echo"<td>".$posts[$x][4]." ";

                            if($posts[$x][2] != $username){
                                /*echo"<br>";*/
                                echo"<a href='../php/likePost.php?postID=".$posts[$x][5]."' class='tableButton'>Like</a>";
                            }

                            echo"</td>";
                            echo"<td><a href='comments.php?postID=".$posts[$x][5]."' class='tableButton'>View Comments</a></td>";
                        echo"</tr>";

                    }


                ?>


            </table>
        </div>
        
        <a href="post.php">Make Post</a>
        
        <a href="search.php">Search Posts</a>
    
        <a href="home.php">Home</a>
        
        
    </body>

</html>
