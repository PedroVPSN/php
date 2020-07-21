<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
    <?php 
        $number = 10;

        switch ($number) {
            case 48:
                echo "it is 48";
                break;
            case 10:
                echo "it is 10";
                break;
            
            default:
                echo "Number not found";
                break;
        }
    ?>
</body>
</html>