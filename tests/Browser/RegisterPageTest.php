<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterPageTest extends DuskTestCase
{
    public function testUserCanGoToTheLoginPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('register')
                ->assertSeeLink('Login')
                ->clickLink('Login')
                ->assertRouteIs('login');
        });
    }
}
