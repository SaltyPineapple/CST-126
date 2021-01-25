<!--
    Mark Pratt
    CST-126
    Project Version 8
    Synopsis: 
        Holds multiple functions for querying database
-->

<?php
    // connect function
    // used to connect to the database 
    function dbConnect() {
        $con = mysqli_connect('localhost', 'root', 'root', 'project');
        
        if(!$con){
            die("Database not connected" . mysqli_connect_error);
        }
        
        return $con;
    }

    
    // this will return all of the users posts into an array

    function getUserPosts($username){
        $sql = "SELECT * FROM Posts where username = '$username'";
        

        $result = mysqli_query(dbConnect(), $sql);
        
        $users = array();

        if(mysqli_num_rows($result) > 0){
            $index = 0;

            while($row = mysqli_fetch_assoc($result)){
                
                $users[$index] = array(
                    $row["DatePosted"], $row["Title"], $row["Post"], $row["Likes"], $row["ID"]
                );
                ++$index;
                
            }
        }

        return $users;
    }


    /* How this will work
        
        return all posts in an array ordered by date posts
        gets every users post
        
    */

    function getEveryPost(){
        $sql = "SELECT * from Posts order by DatePosted";
        
        $result = mysqli_query(dbConnect(), $sql);
        $posts = array();
        
        if(mysqli_num_rows($result) > 0){
            $index = 0;

            while($row = mysqli_fetch_assoc($result)){
                
                $posts[$index] = array(
                    $row["DatePosted"], $row["Title"], $row["Username"], $row["Post"], $row["Likes"], $row["ID"]
                );
                ++$index;
                
            }
        }

        return $posts;
        
    }


    function getAllComments($postID){
        $sql = "SELECT * FROM Comments where PostID = $postID";
        
        $result = mysqli_query(dbConnect(), $sql);
        $comments = array();
        
        if(mysqli_num_rows($result) > 0){
            $index = 0;

            while($row = mysqli_fetch_assoc($result)){
                
                $comments[$index] = array(
                    $row["DateCommented"], $row["Username"], $row["Comment"], $row["ID"]
                );
                ++$index;
                
            }
        }

        return $comments;
    }
    

    function getSinglePost($postID){
        $sql = "SELECT * FROM Posts Where ID = $postID";
        $result = mysqli_query(dbConnect(), $sql);
            
        $post = array();
        
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $post[0] = array($row["Post"]);
            }
        }
        return $post;
    }

    function searchPosts($col, $data){
        $sql = "Select * from Posts where $col Like '%$data%'";
        $go = mysqli_query(dbConnect(), $sql);
        
        $results = array();
        
        if(mysqli_num_rows($go) > 0){
            $index = 0;
            
            while($row = mysqli_fetch_assoc($go)){
                $results[$index] = array(
                    $row["DatePosted"], $row["Title"], $row["Username"], $row["Post"], $row["Likes"], $row["ID"]);
            }
        }
        return $results;
    }

    
    

?>