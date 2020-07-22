<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Value</title>
</head>
<body>
    <?php 
        function addNumbers($number1, $number2) {
            $sum = $number1 + $number2;
            
            return $sum;
        }
        $result = addNumbers(2, 3);

        echo $result;
    ?>
</body>
</html>