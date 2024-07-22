<?php
//$cookie_name = "user";
//$cookie_value = "John Doe";
//setcookie($cookie_name, $cookie_value, time() +(86400*30), "/");
setcookie("test_cookie", "test", time()+3600, "/");
?>
<html>
    <head>
        <meta lang="eng">
    </head>
<body>


<?php
if (count($_COOKIE) > 0) {
    echo "Cookies are enabled";
} else {
echo "Cookie are disabled";

}
?>

</body>
</html>