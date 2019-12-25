<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->value('#email', 'dao_nhat@gmail.com')
                ->value('#password', '12341234')
                ->press('Login')
                    ->assertSee('You are logged in!');
        });
    }
}
