<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
class LI_02Step extends \AcceptanceTester
{
    public function LoginFuntion_02($username)
    {
        /**
         * funtion check invalid username
         */
        $I = $this;
        $I ->amOnPage(Login_Page::$URL);
        $I ->waitForElementVisible(Login_Page::$usernameField,10);
        $I ->fillField(Login_Page::$usernameField,$username);
        $I ->click(Login_Page::$continueButton);

    }
}