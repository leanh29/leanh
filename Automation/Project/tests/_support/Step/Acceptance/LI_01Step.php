<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
class LI_01Step extends \AcceptanceTester
{
    public function LoginFuntion_01($userName, $password)
    {
        /**
         * funtion check valid username and password , valid  username + invalid password
         */
        $I = $this;
        $I ->amOnPage(Login_Page::$URL);
        $I ->waitForElementVisible(Login_Page::$usernameField,10);
        $I ->fillField(Login_Page::$usernameField,$userName);
        $I ->click(Login_Page::$continueButton);
        $I -> waitForElementVisible(Login_Page::$passwordField,10);
        $I ->fillField(Login_Page::$passwordField,$password);
        $I ->click(Login_Page::$loginButton);
    }
}