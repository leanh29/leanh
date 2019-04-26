<?php
use Page\LoginPage as Login_Page;
use Step\Acceptance\LI_01Step as Step_01;
use Step\Acceptance\LI_02Step as Step_02;
use Step\Acceptance\LI_03Step as Step_03;
use Step\Acceptance\LI_04Step as Step_04;
use Step\Acceptance\LI_05Step as Step_05;
use Step\Acceptance\LI_06Step as Step_06;
use Step\Acceptance\LogOutStep as Logout_step;
class SourceCest
{
    public function UsernameAndPasswordValid(Step_01 $I)
    {
        /**
         * test username and password valid
         */
        $I ->LoginFuntion_01('leanhanh','leanhbb290109');
        $I ->waitForText('Followed Sites',20);
        $I->comment(    'Login successfully');
    }
    public function LogOut(Logout_step $I)
    {
        /**
         * LOG OUT
         */
        $I ->LogOut();
    }
    public function InvalidPassword(Step_01 $I)
    {
        /**
         * test valid username with invalid password
         */
        $I ->LoginFuntion_01('leanhanh','leanhbb');
        $I ->waitForElementVisible(Login_Page::$erroInput,10);
    }
    public function passwordWithSpace(Step_01 $I)
    {
        /**
         * test when password has space
         */
        $I->LoginFuntion_01('leanhanh','leanhbb 290109');
        $I->waitForElementVisible(Login_Page::$erroInput,10);
    }
    public function passwordNull(Step_01 $I)
    {
        /**
         * test if password null
         */
        $I->LoginFuntion_01('leanhanh','');
        $I->waitForElementVisible(Login_Page::$erroInput,10);
    }
    public function InvalidUsername(Step_02 $I)
    {
        /**
         * test invalid username with valid password
         */
        $I ->LoginFuntion_02('leanhv');
        $I ->waitForElementVisible(Login_Page::$erroInput,10);
    }
    public function UernameAlreadyEixst(Step_01 $I)
    {
        /**
         * test if username already exist
         */
        $I ->LoginFuntion_01('leanh','leanhbb290109');
        $I ->waitForElementVisible(Login_Page::$erroInput,10);
    }
    public function UernameWithSpaceInside(Step_01 $I)
    {
        /**
         * test if username has space
         */
        $I->LoginFuntion_01('leanh anh','leanhbb290109');
        //$I->waitForElementNotVisible(Login_Page::$followedSites,30);
        $I->wait(10);
        $I->dontSee('Reader');
    }
    public function UsernameWithSpaceOutside(Step_01 $I)
    {
        /**
         * test if password has space
         */
        $I ->LoginFuntion_01('leanhanh ','leanhbb290109');
//        $I->waitForElement(Login_Page::$erroInput,15);
        $I->wait(10);
        $I->dontSee('Reader');
    }
    public function urlUsername(Step_02 $I)
    {
        /**
         * test if username is url
         */
        $I->LoginFuntion_02('https://wordpress.com/');
        $I->waitForElementVisible(Login_Page::$erroInput,10);
    }
    public function nullUsername(Step_02 $I)
    {
        /**
         * test if username null
         */
        $I->LoginFuntion_02('');
        $I->waitForElementVisible(Login_Page::$erroInput);
    }
    public function checkTypePassword(Step_03 $I)
    {
        /**
         * test type of password
         */
        $I->LoginFuntion_03('leanh','leanhbb');
        $I->waitForElementVisible(Login_Page::$typeText,10);
    }
    public function termsOfService(Step_04 $I)
    {
        /**
         * test terms of service hhyperlink
         */
        $I->LoginFuntion_04(Login_Page::$termOfServiceHyper);
        $I->comment('Click successfull');
        //$I->waitForText('Conditions d’utilisation',10);
    }
    public function countinueWithGoogle(Step_04 $I)
    {
        /**
         * test hyperlink 'countinue with google'
         */
        $I->LoginFuntion_04(Login_Page::$continueGoogleButton);
        $I->acceptPopup();
        $I->cancelPopup();
        //$I->canSeeInPopup('Đăng nhập');
    }
    public function createNewAcount(Step_04 $I)
    {
        /**
         * test hyperlink 'create a new account'
         */
        $I->LoginFuntion_04(Login_Page::$creataHyper);
        $I->waitForText('get started.',20);
    }
    public function emailLinkLogin(Step_04 $I)
    {
        /**
         * test hyperlinkk 'email me a login link'
         */
        $I->LoginFuntion_04(Login_Page::$emailLoginLinkHyper);
        $I->comment('Click successfully');
        //$I->waitForText('Envoyez-moi un lien de connexion par e-mail.',10);
    }
    public function lostPassword(Step_04 $I)
    {
        /**
         * test hyperlink 'lost your password'
         */
        $I->LoginFuntion_04(Login_Page::$lostPasswordHyper);
        $I->waitForText('Mot de passe oublié',10);
    }
    public function backToHomePage(Step_04 $I)
    {
        /**
         * test hyperlink 'back to Wordpress.com'
         */
        $I->LoginFuntion_04(Login_Page::$backHyper);
        $I->waitForText('Concevez un site Web, créez un mouvement.',15);
    }
    public function vietnamese(Step_04 $I)
    {
        /**
         * test 'translate to Vietnames' hyperlink
         */
        $I->LoginFuntion_04(Login_Page::$vietnameseHyper);
        $I->comment('Click succesfull');
        //$I->waitForText('Translation of WordPress.com:',15);
    }
    public function reopenTab(Step_01 $I)
    {
        /**
         * check login successfull, open new tab anđ keep login
         */
        $I ->LoginFuntion_01('leanhanh','leanhbb290109');
        $I ->waitForText('Reader',20);
        $I->openNewTab();
        $I->amOnPage(Login_Page::$homeUrl);
        $I->waitForText('Reader',20);
    }
    public function checkLimitedInvalidPassword(Step_05 $I)
    {
        /**
         * check if enter invalid password 5 times
         */
        $I->LoginFuntion_05('leanhanh','leanh','leanh', 'lean','leanh','leanh');
        $I->waitForElementVisible(Login_Page::$limitedPassword,10);
    }
}
