<?php
session_start();
?>

<html>
    <body>
        <?php
        $_SESSION["name"] = "Mikhail";
        $_SESSION["email"] = "Mishaluru@gmail.com";
        echo "Session variables are set." ."<br>";

        ?>
        <a href="homePage.php"> Go back to home page</a>
    </body>
</html>