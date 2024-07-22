<!DOCTYPE html>
<html>
    <body>
    <?php
    function divide($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero not allowed");
            
        }
        return $dividend/$divisor;
    }
    try {
        //code...
        echo(divide(5,0));
    } catch (Exception $ex) {
        //throw $th;
        $code = $ex -> getCode();
        $message = $ex -> getMessage();
        $file = $ex -> getFile();
        $line = $ex -> getLine();
        echo "Exception thrown in $file on line $line: [Code $code] $message" . "<br>";
    } finally {
        echo "Process complete";
    }
    echo(divide(5, 0));
    ?>
    </body>
</hml>