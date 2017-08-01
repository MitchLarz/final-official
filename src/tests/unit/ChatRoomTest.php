<?php

require __DIR__.'/../../Domain/ChatRoom.php';

class ChatRoomTest extends \Codeception\Test\Unit
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
        $this->harness = new \App\Domain\ChatRoom();
    }

    protected function _after()
    {
        unset($this->harness);
    }

    // tests
    public function testChatRoomName()
    {
        // arrange
        $expected = "foo";
        $this->harness->SetName($expected);
        // act
        $actual = $this->harness->Name();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testChatRoomTopic()
    {
        // arrange
        $expected = "Test Topic";
        // act
        $this->harness->SetTopic($expected);
        $actual = $this->harness->GetTopic();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testChatRoomJoin() {
        // arrange
        $mem = new \App\Domain\User();
        $mem->SetAlias("foo");
        $mem->SetEmail("foo@example.com");
        // act
        $object = $this->harness->Join($mem);
        // assert
        $this->assertEquals($this->harness, $object);
    }

    public function testChatRoomLeave() {
        // arrange
        $mem = new \App\Domain\User();
        $mem->SetAlias("foo");
        $mem->SetEmail("foo@example.com");
        $this->harness->Join($mem);
        // act
        $ok = $this->harness->Leave($mem);
        // assert
        $this->assertEquals(true, $ok);
    }

    public function testChatRoomListMembers() {
        // arrange
        $mem0 = new \App\Domain\User();
        $mem0->SetAlias("foo");
        $mem0->SetEmail("foo@example.com");
        $mem1 = new \App\Domain\User();
        $mem1->SetAlias("bar");
        $mem1->SetEmail("bar@example.com");
        $this->harness->Join($mem0);
        $this->harness->Join($mem1);
        $expected = [$mem0, $mem1];
        // act
        $actual = $this->harness->Members();
        // assert
        $this->assertEquals($expected, $actual);
    }
}
