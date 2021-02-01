<?php

    $id = $_GET["postNum"];

    echo"<script>if (confirm('Delete Post?'))
                 location.href='postDeleter.php?postNum=$id';
                 else
                    location.href='../html/displayPosts.php';
        </script>";


?>


// get post num from get, adjust other files