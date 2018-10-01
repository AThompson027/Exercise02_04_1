<html> 
     
    <head> 
       <title>Process Jumble Maker</title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="initial-scale-1.0"> 
        <script src="modernizr.custom.65897.js"></script> 
    </head> 
     
    <body> 
        <?php
        $errorCount = 0;
        $words = array();
        // displays the errors that the user is experiencing for them to fix their data inputed in the fields
        function displayError($fieldName, $errorMsg) {
            global $errorCount;
            echo "Error for \"$fieldName\": $errorMsg<br>\n";
            ++$errorCount;
        }
        // this function validates the words and if they are correct for the code to jumble up (4-7 word long words required)
        function validateWord($data, $fieldName) {
            global $errorCount;
            $retval = "";
            // if the data is empty
            if (empty($data)) {
                displayError($fieldName, "This field is required");
                ++$errorCount;
                $retval = "";
            } 
            // if the data is correct
            else {
                // the trim = taking away whitespace
                // the strip slashes takes away mistaken slashed the user puts in the field
                $retval = trim($data);
                $retval = stripslashes($retval);
                if (strlen($retval) < 4 || strlen($retval) > 7) {
                    displayError($fieldName, "Words must be between 4 and 7 characters in length");
                }
                if (preg_match("/^[A-Za-z]+$/i", $retval) == 0) {
                    displayError($fieldName, "Words must consist only of letters");
                }
            }
            // Makes all the data uppercase and jumbles them up
            $retval = strtoupper($retval);
            $retval = str_shuffle($retval);
            return $retval;
        }
        
        $words[] = validateWord($_POST['word1'], "Word 1");
        $words[] = validateWord($_POST['word2'], "Word 2");
        $words[] = validateWord($_POST['word3'], "Word 3");
        $words[] = validateWord($_POST['word4'], "Word 4");
        if($errorCount > 0) {
            echo "Please use the \"Back\" button to re-enter any missing data.<br>\n";
        } else {
            $wordNum = 0;
            foreach ($words as $word) {
                echo "Word " . ++$wordNum . ": $word<br>\n";
            }
        }
        ?>
    </body> 
     
</html>