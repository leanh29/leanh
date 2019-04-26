<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
class LogOutStep extends \AcceptanceTester
{
    public function LogOut(){
        $I = $this;
        $I ->waitForElementVisible(Login_Page::$personIcon);
        $I ->click(Login_Page::$personIcon);
        $I ->waitForElementVisible(Login_Page::$logOutButton);
        $I ->click(Login_Page::$logOutButton);
        $I ->waitForElementVisible(Login_Page::$login,30);
        $I ->click(Login_Page::$login);
    }
}