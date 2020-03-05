<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Problem 1 Day 3</title>
</head >

<body>
    <?php
    
        class arithmos{
            function add($a, $b){
                return $a + $b;
            }
 
            function subtract($a, $b){
                return $a - $b;
            }

            function multiply($a, $b){
                return $a * $b;
            }

            function divide($a, $b){
                return $a / $b;
            }

            function modulo($a, $b){
                return $a % $b;
            }

        }

        $imple = new arithmos();
        $A = 10;
        $B = 7;

        echo $A."&nbsp  +  &nbsp".$B."&nbsp  =  &nbsp".$imple->add($A,$B) . "<br>";
        echo $A."&nbsp  -  &nbsp".$B."&nbsp  =  &nbsp".$imple->subtract($A,$B) . "<br>";
        echo $A."&nbsp  *  &nbsp".$B."&nbsp  =  &nbsp".$imple->multiply($A,$B) . "<br>";
        echo $A."&nbsp  /  &nbsp".$B."&nbsp  =  &nbsp".$imple->divide($A,$B) . "<br>";
        echo $A."&nbsp  %  &nbsp".$B."&nbsp  =  &nbsp".$imple->modulo($A,$B) . "<br>";

        
    ?>
</body>

</html>