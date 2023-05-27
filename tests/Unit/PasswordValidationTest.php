<?php

namespace Tests\Unit;

use Meteor\User\Rules\ValidPassword;
use PHPUnit\Framework\TestCase;

class PasswordValidationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_password_should_not_be_less_than_8_character(): void
    {
        $result = (new ValidPassword())->passes('', '1DSA2@1');
        $this->assertEquals(0, $result);
    }

    public function test_password_must_have_a_uppercase_letter(): void
    {
        $result = (new ValidPassword())->passes('', '1aas2@1');
        $this->assertEquals(0, $result);
    }

    public function test_password_must_have_a_lowercase_letter(): void
    {
        $result = (new ValidPassword())->passes('', '1AAA2@1');
        $this->assertEquals(0, $result);
    }

    public function test_password_must_have_a_number(): void
    {
        $result = (new ValidPassword())->passes('', 'sAA@cfv');
        $this->assertEquals(0, $result);
    }

    public function test_password_must_have_specific_letter(): void
    {
        $result = (new ValidPassword())->passes('', 'sAA2cfv');
        $this->assertEquals(0, $result);
    }
}
