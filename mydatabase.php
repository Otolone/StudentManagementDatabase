<?php
$servername = "localhost";
$username = "root";
$password = "";

/*
//create connection 
$conn = new mysqli($servername, $username, $password);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected succsfully"; 

$sql = "CREATE DATABASE newDB";
if ($conn->query($sql) === true) {
    echo "Database created succesfully";
}
else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
*/





try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connnected succesfully";
    $sql = "CREATE DATABASE myDBPDO";
    //use exec because no results are returned
    $conn->exec($sql);
    echo "Database created succesfully<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn =null;

?>