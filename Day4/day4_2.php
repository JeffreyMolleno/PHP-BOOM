<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Problem 2 Day 4</title>
</head>

<body>
    <?php

        //given that all angle comply with a 90 degree angle this then implies that by definition it is a rectangle
        //if not then check for the presence of the property that define a rhombus.

        class quadrilaterals{

            public $Aval;
            public $Bval;
            public $Cval;

            public $a;
            public $b;
            public $c;

            

            public function __construct($x, $y, $z){
                $this->a = $x;
                $this->b = $y;
                $this->c = $z;

                $this->angleA();
                $this->angleB();
                $this->angleC();
                $this->identifyType();
            }

            public function angleA(){
                $z = (pow($this->b, 2) + pow($this->c, 2) - pow($this->a, 2)) / (2 * $this->b * $this->c);
                $z = acos($z);
                return $this->Aval = $this->RadianToDegree($z); 
            }

            public function angleB(){
                $z = (pow($this->c, 2) + pow($this->a, 2) - pow($this->b, 2)) / (2 * $this->c * $this->a);
                $z = acos($z);
                return $this->Bval = $this->RadianToDegree($z); 
            }

            public function angleC(){
                 $this->Cval = 180-$this->Aval-$this->Bval;
                 return $this->Cval;
            }

            public function RadianToDegree($radian){
                return $radian * (180/pi());
            }

            public function identifyType(){

                if(($this->Aval + $this->Bval) == 90 && $this->Cval == 90){
                    print ("This is a rectangle <br>");
                }else if($this->a === $this->b){
                    print ("This is a rhombus <br>");
                }else{
                    print("The input doesnt have the properties of a rectangle or a rhombus <br>");
                }
            }

        }


        //this approach uses the pythagorean theorem on identifying the given value as a rectangle or a rhombus if the opposite and adjacent sides have the same length
        class pythagorean {
            public $a;
            public $b;
            public $c;

            public function __construct($a, $b, $c){
                $this->a = $a;
                $this->b = $b;
                $this->c = $c;
                $this->identifyType();
            }

            public function identifyType(){

                if((pow($this->a,2) + pow($this->b,2)) === pow($this->c,2)) {
                    return print("This is a rectangle <br>");
                }
                if($this->a === $this->b){
                    return print("This is a rhombus <br>");
                }
                else{
                    return print("The input doesnt have the properties of a rectangle or a rhombus");
                }
            }
        }

        $angleTest = new quadrilaterals(3 , 4, 5);
        $angleTest = new pythagorean(3, 4, 5);
    ?>
</body>

</html>
