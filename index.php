
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
   $myArray = array("specs", "mugs", "sausage rolls");

    printmyArray();

    $myArray [1] = "hugs"; // modifies position 1 (re)

    print $myArray;

    unset($array [2]); // removes the array in position 2

    print $myArray;
    function printmyArray()
    {
        foreach($myArray as $x) {
            echo "<p>" . $x . "</p>";
        }
    }


    ?>
</p>
</body>
</html>
