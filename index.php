
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
   $myArray = array("specs", "mugs", "sausage rolls");

    printmyArray($myArray);

    $myArray [1] = "hugs"; // modifies position 1 (re)

    printmyArray($myArray);

    unset($myArray [2]); // removes the array in position 2

    printmyArray($myArray);


    function printmyArray($myArray)
    {
        foreach($myArray as $x) {
            echo "<p>" . $x . "</p>";
        }
    }


    ?>
</p>
</body>
</html>
