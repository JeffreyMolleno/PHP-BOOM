<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CallUlater</title>
</head>

<body>
    <?php

    class MyCalculator
    {

        public $var1;
        public $var2;

        public function __construct($in1, $in2)
        {
            $this->var1 = $in1;
            $this->var2 = $in2;
        }

        public function add()
        {
            return $this->var1 + $this->var2;
        }

        public function multiply()
        {
            return $this->var1 * $this->var2;
        }

        public function subtract()
        {
            return $this->var1 - $this->var2;
        }

        public function divide()
        {
            return  $this->var1 / $this->var2;
        }
    }

    $mycalc = new MyCalculator(12, 6);

    echo $mycalc->add() . '<br>';
    echo $mycalc->multiply() . '<br>';
    echo $mycalc->subtract() . '<br>';
    echo $mycalc->divide() . '<br>';

    ?>
</body>

</html>