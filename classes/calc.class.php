<?php

class Calc {
  public $operator;
  public $num1;
  public $num2;

  public function __construct(string $op, int $num1, int $num2) {
    $this->operator = $op;
    $this->num1 = $num1;
    $this->num2 = $num2;
  }

  public function calculator($op) {
    switch ($op) {
      case 'add':
        return $result = $this->num1 + $this->num2;
        break;
      case 'sub':
        return $result = $this->num1 - $this->num2;
        break;
      case 'div':
        return $result = $this->num1 / $this->num2;
        break;
      case 'mul':
        return $result = $this->num1 * $this->num2;
        break;
      default:
        echo 'Error!';
        break;
    }
  }
}