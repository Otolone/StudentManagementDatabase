<html>
    <head>
        <meta lang="eng">
    </head>
<body>

<table>
<tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
</tr>
<?php 
foreach (filter_list() as $id => $filter) {
    # code...
    echo '<tr><td>' .$filter . '</td><td>' . filter_id($filter) . '</td></tr>';
}
?>
</table>
<?php 
$str = "<h1>Hello World!</h1>";
$newStr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newStr;
?>
<?php 
$int = 0;

if(filter_var($int, FILTER_VALIDATE_INT) === 0  ||    !filter_var($int, FILTER_VALIDATE_INT)=== false) {
    echo("Integer is valid <br>");
} else {
    echo("Integer is not valid <br>");
}
?>
<?php
$int = 122;
$min = 1;
$max = 200;

if(filter_var($int, FILTER_VALIDATE_INT,array("options" => array("min_range" => $min,
"max_range" => $max))) === false) {
    echo("variable value is not within the legal range<br>");
} else {
    echo("Variable value is within the legal range<br>");
}
?>
</body>
</html>