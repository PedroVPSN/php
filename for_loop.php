<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <?php 

        for ($i = 0; $i < 10; $i++) {
            echo $i . "<br />";
        };


        for ($date = strtotime("2014-01-01"); $date < strtotime("2014-02-01"); $date = strtotime("+1 day", $date)) {
            echo date("Y-m-d", $date)."<br />";
        };

        $letter = array();
        
        for ($letters = 'A'; $letters != 'AA'; $letters++){
        array_push($letter, $letters);
        };
        echo '<pre>' . var_export($letter, true) . '</pre>';
    ?>
</body>
</html>