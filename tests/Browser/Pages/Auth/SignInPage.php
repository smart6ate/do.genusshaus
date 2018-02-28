<?php

namespace Tests\Browser\Pages\Auth;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page as BasePage;

class SignInPage extends BasePage
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/login';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param Browser $browser
     *
     * @return void
     */

    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    public function signIn(Browser $browser, $email = null, $password = null)
    {
        $browser
            ->resize(1920, 1080)
            ->type('@login-email', $email)
            ->type('@login-password', $password)
            ->click('@login-button');
    }


    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
        ];
    }
}