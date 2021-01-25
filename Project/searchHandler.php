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
        <link rel="stylesheet" href="styles.css" type="text/css">
        
        
        <title>CS126 Project</title>
    </head>
    <body>
        <?php 
            echo"Logged in as: ".$username;
            
        ?>
        <a href="search.php">Search Posts</a>
        <br>
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
                        echo"<td>".$searchResults[$x][4];
                         
                        if($posts[$x][2] != $username){
                            echo"<br>";
                            echo"<a href='likePost.php?postID=".$searchResults[$x][5]."'>Like</a>";
                        }
                            
                        echo"</td>";
                        echo"<td><a href='comments.php?postID=".$searchResults[$x][5]."'>View Comments</a></td>";
                    echo"</tr>";
                    
                }
               
            
            ?>
        
        
        </table>
    
        <a href="home.php">Home</a>
    
    </body>

</html>