<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;

class LI_04Step extends \AcceptanceTester
{
    /**
     * function check hyperlink
     */
    public function LoginFuntion_04($hyperlink){
        $I= $this;
        $I->amOnPage(Login_Page::$URL);
        $I->waitForElementVisible(Login_Page::$usernameField,10);
        $I->click($hyperlink);
    }
}