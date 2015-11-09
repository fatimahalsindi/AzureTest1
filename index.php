
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php

    for ($b = 1; $b < 30; $b++)
    {
        $y = 0; //I'm using this as a marker to tell that at least one thing is being made
        echo "<p>On day " . $b. " the following products are available: ";

        if ($b % 2 b= 0)
        {
            echo "Sausage Rolls ";
            $y = 1;
        }
        if ($b % 3 b= 0)
        {
            echo "Mugs ";
            $y = 1;
        }
        if ($b % 4 b= 0)
        {
            echo "Specs";
            $y = 1;
        }
        if ($y == 1) //if one thing isn't being made on this day then it displays that nothing is available that day.
        {
            echo "NONE";
        }
        echo "</p>";
    }



    ?>
</p>
</body>
</html>
