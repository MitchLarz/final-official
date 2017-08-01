<?php

require __DIR__.'/../../Domain/Message.php';

class MessageTest extends \Codeception\Test\Unit
{
    /**
     * @var $harness is the class under test
     */
    protected $harness;

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
        $this->harness = new \App\Domain\Message();
    }

    protected function _after()
    {
        unset($this->harness);
    }

    public function testSetBody() {
        // arrange
        $expected = "this is the message body";
        // act
        $object = $this->harness->SetBody($expected);
        // assert
        $this->assertEquals($this->harness, $object);
        $this->assertEquals($expected, $this->harness->GetBody());
    }
}
