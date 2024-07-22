<!DOCTYPE html>
<html>
    <body>
        <?php 
        function my_callback($item) {
            return strlen($item);
        }
        $strings = ["apple", "orange", "banana", "coconut"];
        $lengths = array_map(function ($item) {return strlen($item);}, $strings);
        print_r($lengths);        
        ?>
    <h5>User defined callback functions</h5>
    <?php 
    function exclaim($str) {
        return $str . "! ";
    }
    function ask($str) {
        return $str . "?";
    }

    function printFormatted($str, $format) {
        //calling the $format callback function
        echo $format($str);
    }
    printFormatted("Hello World", "exclaim");
    printFormatted("Hello World", "ask");
    ?>
    </body>
</html>