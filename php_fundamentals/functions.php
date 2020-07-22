<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php 
        function init () {
            saySomething();
            echo "<br>";
            calculate();
        }
        

        function saySomething() {
            echo "hello there!";
        }

        function calculate() {
            echo 34 * 2;
        }

        init();
    ?>
</body>
</html>