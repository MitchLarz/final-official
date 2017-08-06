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
        $this->user_valid = "foo@example.com";
        $this->user_invalid = "example.com";
        $this->body = "Cumque ea porro rerum voluptatem et aut officiis. Et odio hic quaerat ab aliquid.";
        $this->harness = new \App\Domain\Message($this->user_valid, $this->body);
    }

    protected function _after()
    {
        unset($this->harness);
    }

    public function testSetBody() {
        // arrange
        $expected = $this->body;
        // act
        $object = $this->harness->GetBody();
        // assert
        $this->assertEquals($expected, $this->harness->GetBody());
    }
}
