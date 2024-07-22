<?php
namespace MyProject\SubNamespace1{
    class MyClass1 {
        public function sayHello() {
            echo "Hello from MyProject\SubNamespaces\MyClass <br>";
        }
    }
}


namespace MyProject\SubNamespace2 {
    class MyClass2 {
        public function sayHello() {
            echo "Hello from MyProject\SubNamespaces2\MyClass2 <br>";

        }
    }
}

namespace MyProject\SubNamespace3{
    class MyClass {
        public function arrayExample() {
            $arr = \array('a', 'b', 'c'); // Global namespace array function
            print_r($arr);
        }
    }

}




?>