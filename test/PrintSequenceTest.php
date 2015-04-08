<?php
class PrintSequenceTest extends PHPUnit_Framework_TestCase
{
    public function testResultShouldBeOneToFive()
    {
        $integerObject = new PrintSequence();

        $result = $integerObject->toString('[1,5]');
        $this->assertEquals('1,2,3,4,5', $result);
    }

    public function testResultShouldBeOneToFour()
    {
        $integerObject = new PrintSequence();

        $result = $integerObject->toString('[1,5)');
        $this->assertEquals('1,2,3,4', $result);
    }

    public function testResultShouldBeTwoToFive()
    {
        $integerObject = new PrintSequence();

        $result = $integerObject->toString('(1,5]');
        $this->assertEquals('2,3,4,5', $result);
    }

    public function testResultShouldBeTwoToFour()
    {
        $integerObject = new PrintSequence();

        $result = $integerObject->toString('(1,5)');
        $this->assertEquals('2,3,4', $result);
    }


    

}
?>