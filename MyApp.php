<?php

class Product {
  private $name;
  private $price;
  private $amount; //Amount in storage
  public function __construct($name, $price, $amount) {
    $this->name = $name; $this->price = $price; $this->amount = $amount;

    // define nested array
    $students = array(
      array(
        'id' => '1',
        'name' => 'Raymond Rabbit', 'tel' => '1234567',
        'email' => 'ray@bunnyplanet.in', 'points' => '120',
      ), array(
        'id' => '2',
        'name' => 'David Duck',
        'tel' => '8562904',
        'email' => 'dduck@duckpond.corp', 'points' => '98',
      ), array(
        'id' => '3',
        'name' => 'Harold Horse',
        'tel' => '5942033',
        'email' => 'kingharold@farmersmarket.horsestuff.com', 'points' => '140',
      ), array(
        'id' => '4',
        'name' => 'Jim Pembroke', 'tel' => '4533322',
        'email' => 'JimP@some.com', 'points' => '111',
      ), array(
        'id' => '5',
        'name' => 'Ben Duke',
        'tel' => '3344556',
        'email' => 'BenDuke@smarket.com', 'points' => '145',
      ) );
      //Grades
      $grades = array(
        array(
          'student_id' => '1', 'course_id' => 'c1', 'grade' => '2'
        ), array(
          'student_id' => '2', 'course_id' => 'c2', 'grade' => '4'
        ), array(
          'student_id' => '1', 'course_id' => 'c3', 'grade' => '3'
        ), array(
          'student_id' => '5', 'course_id' => 'c4', 'grade' => '2'
        ), array(
          'student_id' => '4', 'course_id' => 'c3', 'grade' => '4'
        ),array(
          'student_id' => '3', 'course_id' => 'c3', 'grade' => '3'
        ), array(
          'student_id' => '2', 'course_id' => 'c5', 'grade' => '4'
        ), array(
          'student_id' => '1', 'course_id' => 'c6', 'grade' => '5'
        ), array(
          'student_id' => '3', 'course_id' => 'c4', 'grade' => '3'
        ), array(
          'student_id' => '4', 'course_id' => 'c12', 'grade' => '5'
        ), array(
          'student_id' => '1', 'course_id' => 'c13',
          'grade' => '4' ),
          array(
            'student_id' => '5', 'course_id' => 'c14', 'grade' => '3'
          ),
        );
      }

      public function changePrice($newPrice) {
        return ($this->amount * $this->price);
      }
        
      public function changeAmount($newvalue) {
        return ($this->amount * $this->price);
      }
    }

$product = new Product("Edam", 3.3, 120);
$newAmount = $product->changePrice(4.1);
$newAmount = $product->changeAmount(245);

?>
