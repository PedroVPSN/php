<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Parameters</title>
</head>
<body>
    <?php 
        function greeting($message) {
            echo $message;
        }
        greeting("Hi, <br> How are you today? <br>");

        function calculator ($number1, $number2) {
            $sum = $number1 + $number2;
            echo $sum;
        }
        calculator(2,5)
    ?>
</body>
</html>