<html>
<body>    
<?php
require 'MyClass.php';
use MyProject\SubNamespace1\MyClass1;
use MyProject\SubNamespace2\MyClass2;

$obj1 = new MyClass1();
$obj1->sayHello();
$obj2 = new MyClass2();
$obj2->sayHello();
?>
</body>
</html>