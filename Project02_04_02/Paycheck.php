<!DOCTYPE>
<html>

<head>
    <title>Paycheck</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale-1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <?php

$hoursWorked = $_GET["hours"];
$hourlyWages = $_GET["wage"];
    
echo "You entered that you worked: $hoursWorked hours.<br>";
echo "You entered that your hourly wage is: \$$hourlyWages per hour.<br>";

if ($hoursWorked <= 40){
    $payCheck = ($hoursWorked * $hourlyWages);
echo "Your Paycheck is: \$$payCheck";
}

if ($hoursWorked > 40){
    $payCheck = ($hoursWorked * $hourlyWages) + (($hoursWorked - 40) * $hourlyWages * 1.5);
    
echo "Your Paycheck is: \$", number_format("$payCheck", 2);
}

?>

</body>

</html>
