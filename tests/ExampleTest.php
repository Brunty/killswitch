<?php

class RemitRepositoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_can_instanciate_an_example_class()
    {
        $example = new KillSwitch\Example;

        $this->assertInstanceOf('KillSwitch\Example', $example);
    }

    /**
     * @test
     */
    public function it_can_call_a_greet_method()
    {
        $example = new KillSwitch\Example;

        $this->assertEquals('Hello, World!', $example->demo());
    }

}
