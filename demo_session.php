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
    session_unset();
    session_destroy();
     ?>
    <?php 
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    $_SESSION["favcolor"] = "yellow";
    echo "Session variables are set.";
    ?>
    
</body>
</html>