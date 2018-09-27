<!doctype>


<html>

<head>
    <title>Scholarship 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale-1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2 style="text-align: center">Scholarship Form 2</h2>
        <?php
 $x = 2;
   while($x){
   for($j = 0; count($x); $j++) {
       echo $j * $x;
    if($j * $x >= 10) {
        break 2;
    }
        }
$x++;
}
?>
</body>

</html>
