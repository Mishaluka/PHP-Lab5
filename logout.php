<?php

session_start();
?>

<html>
    <body>
        <?php 
        session_destroy($_SESSION["name"]);
        
        session_destroy();
        header("Location: homePage.php");
        ?>
    </body>

    
</html>