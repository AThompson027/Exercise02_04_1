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

    // global variables
$hoursWorked = $_GET["hours"];
$hourlyWages = $_GET["wage"];
    
    // output to the submit button with the data the user inputed in the fields
echo "You entered that you worked: $hoursWorked hours.<br>";
echo "You entered that your hourly wage is: \$$hourlyWages per hour.<br>";

    //if the hours the user inputed in the field is less than or equal to 40 then the payCheck/output will be the 
    //hours inputed times the hourly wage inputed. Then it will echo the total/output.
if ($hoursWorked <= 40){
    $payCheck = ($hoursWorked * $hourlyWages);
echo "Your Paycheck is: \$$payCheck";
}
// if the hours the user has inputed are greater than 40 then the payCheck/output will he the hours worked, times the hourly wage, plus the hours worked minus 40 times the hourly wage times 1.5. This will display the total/output with the echo
if ($hoursWorked > 40){
    $payCheck = ($hoursWorked * $hourlyWages) + (($hoursWorked - 40) * $hourlyWages * 1.5);
    // the number_format formats the number to 2 decimal places to make it mor eaccurate to dollar currency.
echo "Your Paycheck is: \$", number_format("$payCheck", 2);
}

?>

</body>

</html>
