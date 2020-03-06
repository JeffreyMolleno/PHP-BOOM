<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        $x = 0;

        while ($x < 9) {
            echo "abc ";
            $x++;
        }

        $x = 0;
        echo "<br><br>";

        do {
            echo "xyz ";
            $x++;
        } while ($x < 9);

        echo "<br><br>";

        for ($i = 1; $i <= 9; $i++) {
            echo $i . " ";
        }

        echo "<br><br>";

        for ($i = 0; $i < 6; $i++) {
            echo $i + 1 . " ITEM " . chr(833 + $i). "<br>";
        }
    ?>
</body>

</html>