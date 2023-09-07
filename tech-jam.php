<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // dit is een for loop die van 33 tot 543 telt
    for ($i = 33; $i < 543; $i++) {

        //hier wordt er gecheckt of de nummer even of oneven is
        //even v
        if ($i % 2 == 0) {
            echo "<b> $i </b>" . "<br>";
        }
            //oneven v
            // hier wordt het gecheckt of ik het kan delen tussen 5,9 en 5&9
                            // gedeeld door 5&9 v
        elseif ($i % 5 == 0 && $i % 9 == 0) {
            echo "Web" . "<br>";
        } 
            // gedeeld door 5 v
        elseif ($i % 5 == 0) {
            echo "Software" . "<br>";
        }
        // gedeeld door 9 v
        elseif ($i % 9 == 0) {
            echo "Developer" . "<br>";
        }

        else{
            echo "$i " . "<br>";
        }






    }

    ?>
</body>

</html>