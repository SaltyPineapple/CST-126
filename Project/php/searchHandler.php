<!--
    Mark Pratt
    CST-126
    Project Version 8
    Synopsis: 
        Handler for searching posts
-->

<?php
    require('utility.php');
    require('myfuncs.php');

    $username = getUserID();

    $searchType = $_POST["searchType"];
    $searchData = $_POST["searchTerm"];
    $searchResults = searchPosts($searchType, $searchData);

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
                    for($x=0; $x<count($searchResults); $x++){
                        echo"<tr>";
                            echo"<td class='date'>".$searchResults[$x][0]."</td>";
                            echo"<td>".$searchResults[$x][1]."</td>";
                            echo"<td>".$searchResults[$x][2]."</td>";
                            echo"<td class='realPosts'>".$searchResults[$x][3]."</td>";
                            echo"<td>".$searchResults[$x][4]." ";

                            if($posts[$x][2] != $username){
                                
                                echo"<a href='likePost.php?postID=".$searchResults[$x][5]."' class='tableButton'>Like</a>";
                            }

                            echo"</td>";
                            echo"<td><a href='../html/comments.php?postID=".$searchResults[$x][5]."' class='tableButton'>View Comments</a></td>";
                        echo"</tr>";

                    }


                ?>


            </table>
        </div>
        
        <a href="../html/search.php">Search Posts</a>
    
        <a href="../html/home.php">Home</a>
    
    </body>

</html>