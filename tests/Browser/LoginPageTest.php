<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginPageTest extends DuskTestCase
{
    public function testUserCanGoToTheRegisterPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('login')
                ->assertSeeLink('Register')
                ->clickLink('Register')
                ->assertRouteIs('register');
        });
    }
}
