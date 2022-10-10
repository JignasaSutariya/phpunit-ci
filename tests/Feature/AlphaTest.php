<?php

namespace Tests\Feature;

use Tests\TestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AlphaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/alpha')
                    ->assertSee('Alpha')
                    ->clickLink('Next')
                    ->assertPathIs('/beta');
        });
    }
}
