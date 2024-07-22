<?php
//start the session
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta lang="eng">
    </head>
<body>
    <?php 
    //echo "Favourite color is " . $_SESSION["favcolor"] . "<br>";   $_SESSION["favanimal"] = "cat";
    echo "Favourite animal " . $_SESSION["favanimal"].  "." . "<br>";
    print_r($_SESSION);
    ?>
</body>
</html>