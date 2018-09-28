<!doctype>


<html>
    
    <head>
       <title>Number Form</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale-1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <h2>Number Form</h2>
        <?php
        $displayForm = true;
        $number = "";
        // Designed to see if the fields that are mentioned are set correctly
        if (isset($_POST['submit'])) {
            $number = $_POST['number'];
            // if the data is numeric then the extra form will not re-appear for the user to re-enter the information correctly
            if (is_numeric($number)) {
                $displayForm = false;
            } 
            // This will re-appear the form again for the user to fix the indicated errors. 
            else {
                echo "<p>You need to enter a numeric value.</p>\n";
                $displayForm = true;
            }
        }
        if ($displayForm) {
            ?>
            <form name="numberForm" action="Numberform.php" method="post">
                                                        <!--(echo) $number displays the number they inputed into the field-->
                <p>  
                    Enter a number: <input type="text" name="number" value="<?php echo $number; ?>">
                </p>
                <p>
                    <input type="reset" value="Clear Form">&nbsp;&nbsp;
                    <input type="submit" name="submit" value="Send Form">
                </p>
            </form>
            <?php
            // this indicates to the user that their data is correct and also provides a link to press to try again if they wish
        } else {
            echo "<p>Thank you for entering a number.</p>\n";
            // this echo is squaring (doubling) the number that is inputed into the field by the user
            echo "<p>Your number, $number, squared is " . ($number * $number) . ".</p>\n";
            echo "<p><a href= \"Numberform.php\">Try again?</a></p>\n";
        }
            ?>  
           
        
    </body>
    
</html>