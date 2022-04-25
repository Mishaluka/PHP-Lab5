<?php
session_start();
?>
<!DOCTYPE html>
<body>

<?php
if (isset($_SESSION["name"]) && isset($_SESSION["email"])){
    echo "Name: " . $_SESSION["name"] .".<br>";
    echo "Email: " . $_SESSION["email"]. ".";
    echo "<br>";
}
else "Session not set";
 
 ?>
<a href="homePage.php"> Go back to home page</a>

</body>
</html>