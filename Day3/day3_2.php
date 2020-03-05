<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Problem 2 Day 3</title>
</head>

<body>
    <?php
        class arithmos_flex{
            public $now;

            public function __construct($pass){
                $this->now = $pass;
            }

            function add($b){
                $this->now = $this->now + $b;
                return $b;
            }
 
            function subtract($b){
                $this->now = $this->now - $b;
                return $b;
            }

            function multiply($b){
                $this->now = $this->now * $b;
                return $b;
            }

            function divide($b){
                $this->now = $this->now / $b;
                return $b;
            }

            function modulo($b){
                $this->now = $this->now % $b;
                return $b;
            }

            function increment($b){
                $this->now++;
            }

            function decrement($b){
                $this->now--;
            }

            function now_value(){
                return $this->now;
                return $b;
            }
        }

        $delta = new arithmos_flex(8);
        $variable = &$delta->now;

        echo "Value is now {$variable}.                                             <br>
        Add {$delta->add(2)}. Value is now {$variable}.                             <br>
        Subtract {$delta->subtract(4)}. Value is now {$variable}.                   <br>
        Multiply by {$delta->multiply(5)}. Value is now {$variable}.                <br>
        Divide by {$delta->divide(3)}. Value is now {$variable}.                    <br>
        Increment value by one{$delta->increment(1)}. Value is now {$variable}.    <br>
        Decrement value by one{$delta->decrement(1)}. Value is now {$variable}.";
    ?>
</body>

</html>
