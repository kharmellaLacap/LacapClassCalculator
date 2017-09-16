<?php
class Calculator {
private $x, $y;

public function __construct( $x, $y ) {
$this->x = $x;
$this->y= $y;
}

public function add() {
return $this->x + $this->y;
}

public function subtract() {
return $this->x - $this->y;
}

public function multiply() {
return $this->x * $this->y;
}

public function divide() {
return $this->x / $this->y;
}
}

$Calculator = new Calculator(15,10); 

echo $Calculator->add()."<br>"; 
echo $Calculator->multiply()."<br>"; 
echo $Calculator->subtract()."<br>"; 
echo $Calculator->divide(); 
?>
