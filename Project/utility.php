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
    // called when all posts are being displayed
    function getAllPosts($username){
        $sql = "SELECT * FROM $username";
        

        $result = mysqli_query(dbConnect(), $sql);
        
        $users = array();

        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){
                
                $users[$index] = array(
                    $row["Date"], $row["Post"]
                );
                ++$index;
                
            }
        }

        return $users;
    }

    
    

?>