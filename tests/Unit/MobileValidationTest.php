<?php

namespace Tests\Unit;

use Meteor\User\Rules\ValidMobile;
use PHPUnit\Framework\TestCase;

class MobileValidationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_mobile_can_not_be_less_than_10_character(): void
    {
        $result = (new ValidMobile())->passes('', '930920830');
        $this->assertEquals(0, $result);
    }

    public function test_mobile_can_not_be_more_than_10_character(): void
    {
        $result = (new ValidMobile())->passes('', '93092080334');
        $this->assertEquals(0, $result);
    }

    public function test_mobile_does_not_have_letters(): void
    {
        $result = (new ValidMobile())->passes('', '930920803s');
        $this->assertEquals(0, $result);
    }

}
