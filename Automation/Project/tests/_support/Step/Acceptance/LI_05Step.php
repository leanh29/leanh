<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;

class LI_05Step extends \AcceptanceTester
{
    /**
     * check limited invalid password
     */
    public function LoginFuntion_05($username, $pass1, $pass2, $pass3, $pass4, $pass5){
        $I= $this;
        $I->amOnPage(Login_Page::$URL);
        $I->waitForElementVisible(Login_Page::$usernameField,10);
        $I->fillField(Login_Page::$usernameField, $username);
        $I->click(Login_Page::$continueButton);
        $I->waitForElementVisible(Login_Page::$passwordField,10);
        $I->fillField(Login_Page::$passwordField, $pass1);
        $I->click(Login_Page::$loginButton);
        $I->waitForElementVisible(Login_Page::$passwordField,10);
        $I->clearField(Login_Page::$passwordField);
        $I->fillField(Login_Page::$passwordField,$pass2);
        $I->click(Login_Page::$loginButton);
        $I->clearField(Login_Page::$passwordField);
        $I->fillField(Login_Page::$passwordField,$pass3);
        $I->click(Login_Page::$loginButton);
        $I->clearField(Login_Page::$passwordField);
        $I->fillField(Login_Page::$passwordField,$pass4);
        $I->click(Login_Page::$loginButton);
        $I->clearField(Login_Page::$passwordField);
        $I->fillField(Login_Page::$passwordField,$pass5);
        $I->click(Login_Page::$loginButton);
    }
}