<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
use Page\LoginPage;

class LI_06Step extends \AcceptanceTester
{
    public function LoginFuntion_06(){
        $I = $this;
        $I ->amOnPage(Login_Page::$URL);
        $I ->waitForElementVisible(Login_Page::$usernameField,10);
        $I ->fillField(Login_Page::$usernameField,'leanhanh');
        $I ->click(Login_Page::$continueButton);
        $I -> waitForElementVisible(Login_Page::$passwordField,10);
        $I ->fillField(Login_Page::$passwordField,'leanhbb 290109');
        $I ->click(Login_Page::$loginButton);
    }
}