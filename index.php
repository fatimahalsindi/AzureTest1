
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $myage = 28;

    if ($myage >= 21) {
        echo "You can buy specs, mugs, and sausage rolls";
    }
    elseif ($myage >= 18) {
        echo "You can buy specs and mugs";
    }
    elseif ($myage >= 16) {
        echo "You can buy specs";
    }
    else {
        echo "You can't buy anything";
    }


    ?>
</p>
</body>
</html>
