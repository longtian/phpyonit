<?php
/**
 * Description of Calculator
 *
 * @author Longtian (wyvernnot@gmail.com)
 */
class Calculator {
    public static function add($x,$y){
        return $x+$y;
    }
}

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-08-18 at 14:08:10.
 */
class CalculatorTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Calculator
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Calculator;
    }


    /**
     * @covers Calculator::add
     */
    public function testAdd() {
        PHPUnit_Framework_TestCase::assertEquals(2,$this->object->add(1, 1));
        PHPUnit_Framework_TestCase::assertEquals(2,$this->object->add(1, 0));
    }

}
