<?php

require __DIR__.'/../../Domain/User.php';

class UserTest extends \Codeception\Test\Unit
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
        $this->harness = new \App\Domain\User();
    }

    protected function _after()
    {
        unset($this->harness);
    }

    public function testUserSetEmailFailure() {
        // arrange & act
        $expected = "foo";
        // assert
        try {
            $this->harness->SetEmail($expected);
        } catch (\Exception $e) {
            $this->assertEquals("invalid email address foo",$e->getMessage());
        }
    }

    public function testUserSetEmailSuccess() {
        // arrange
        $expected = "foo@example.com";
        // act
        $this->harness->SetEmail($expected);
        // assert
        $this->assertEquals($expected, $this->harness->GetEmail()); 
    }

    public function testUserAlias() {
        // arrange
        $expected = "foo";
        $this->harness->SetAlias($expected);
        // act
        $actual = $this->harness->GetAlias();
        // assert
        $this->assertEquals($expected, $actual);
    }
}
