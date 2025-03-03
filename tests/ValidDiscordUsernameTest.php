<?php

namespace Milwad\LaravelValidate\Tests;

use Milwad\LaravelValidate\Rules\ValidDiscordUsername;

class ValidDiscordUsernameTest extends BaseTest
{
    /**
     * Set up.
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Test discord username is valid.
     *
     * @test
     *
     * @return void
     */
    public function discord_username_is_valid()
    {
        $rules = ['discord_username' => [new ValidDiscordUsername()]];
        $data = ['discord_username' => 'Milwad#2134'];
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }
}
