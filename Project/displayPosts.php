<?php
    // require functions are here to grab needed functions
    // gets username from session as well
    require_once('utility.php');
    require_once('myfuncs.php');
    $username = getUserID();
    $users = getAllPosts($username);
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <table>
            <tr>
                <th>Date</th>
                <th>Post</th>
            </tr>
            <?php
                // loop through the users database
                // output the posts in readable format
                for($x=0; $x<count($users); $x++){
                    echo"<tr>";
                       echo"<td>".$users[$x][0]."</td>"."<td>".$users[$x][1]."</td>";
                    echo"</tr>";
                }
                
            
            ?>
        
        
        </table>
    
        <a href="index.html">Home</a>
    </body>


</html>