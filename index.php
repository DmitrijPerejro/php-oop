<?php

abstract class A {
  protected int $property1;
  protected int $property2;

  public function getProperty1(): int {
    return $this->property1;
  } 

  public function getProperty2(): int {
    return $this->property1;
  }
  
  public function setProperty1(int $input): void {
    $this->property1 = $input;
  }

  public function setProperty2(int $input): void {
    $this->property2 = $input;
  }

  public abstract function pow(int $input): int;
}

class ChildrenB extends A {
  protected int $someChildrenBproperty;

  public function getChildrenBProperty(): int {
    return $this->someChildrenBproperty;
  }

  public function setChildrenBProperty(int $input): void {
    $this->someChildrenBproperty = $input;
  }

  public function plus(): int {
    return $this->property1 + $this->someChildrenBproperty;
  }

  public function pow(int $input): int {
    return pow($this->someChildrenBproperty, $input);
  }
}

class ChildrenC extends A {
  protected int $someChildrenCproperty;

  public function getChildrenCProperty(): int {
    return $this->someChildrenCproperty;
  }

  public function setChildrenCProperty(int $input): void {
    $this->someChildrenCproperty = $input;
  }

  public function minus(): int {
    return $this->property1 - $this->someChildrenCproperty;
  }

  public function pow(int $input): int {
    return pow($this->someChildrenCproperty, $input);
  }
}

final class ChildrenD extends A {
  protected int $someChildrenDproperty;

  public function getChildrenDProperty(): int {
    return $this->someChildrenDproperty;
  }

  public function setChildrenDProperty(int $input): void {
    $this->someChildrenDproperty = $input;
  }

  public function multiply(): int {
    return $this->property2 * $this->someChildrenDproperty;
  }

  public function pow(int $input): int {
    return pow($this->someChildrenDproperty, $input);
  }
}

class NestedChildrenA extends ChildrenB {
  private int $propertyNestedChildrenA;

  public function getPropertyNestedChildrenA(): int {
    return $this->propertyNestedChildrenA;
  }

  public function setPropertyNestedChildrenA(int $input): void {
    $this->propertyNestedChildrenA = $input;
  }

  public function divide(): int {
    return $this->propertyNestedChildrenA / $this->someChildrenBproperty;
  }

  public function plus(): int {
    return $this->propertyNestedChildrenA + $this->property1;
  }
}

class NestedChildrenB extends ChildrenB {
  private int $propertyNestedChildrenB;

  public function getPropertyNestedChildrenB(): int {
    return $this->propertyNestedChildrenB;
  }

  public function setPropertyNestedChildrenB(int $input): void {
    $this->propertyNestedChildrenB = $input;
  }

  public function module(): int {
    return $this->propertyNestedChildrenB % $this->someChildrenBproperty;
  }

  public function plus(): int {
    return $this->propertyNestedChildrenB + $this->property1;
  }
}

class NestedChildrenC extends ChildrenC {
  private int $propertyNestedChildrenC;

  public function getPropertyNestedChildrenC(): int {
    return $this->propertyNestedChildrenC;
  }

  public function setPropertyNestedChildrenC(int $input): void {
    $this->propertyNestedChildrenC = $input;
  }

  public function max(): int {
    return max($this->propertyNestedChildrenC, $this->someChildrenCproperty);
  }

  public function plus(): int {
    return $this->propertyNestedChildrenC + $this->property1;
  }
}

class NestedChildrenD extends ChildrenC {
  private int $propertyNestedChildrenD;

  public function getPropertyNestedChildrenD(): int {
    return $this->propertyNestedChildrenD;
  }

  public function setPropertyNestedChildrenD(int $input): void {
    $this->propertyNestedChildrenD = $input;
  }

  public function min(): int {
    return min($this->propertyNestedChildrenD, $this->someChildrenCproperty);
  }

  public function plus(): int {
    return $this->propertyNestedChildrenD + $this->property1;
  }
}
