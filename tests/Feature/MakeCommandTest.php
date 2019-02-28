<?php

namespace Tests\Feature;

use Tests\TestCase;

class MakeCommandTest extends TestCase
{
    public function testItReturnsSlugOfArgumentString()
    {
        $this->artisan('make', ['string' => 'šome crázý štring éí+ľš'])
             ->expectsOutput('some-crazy-string-ei-ls')
             ->assertExitCode(0);
    }
}
