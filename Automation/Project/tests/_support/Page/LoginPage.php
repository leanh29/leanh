<?php
namespace Page;

class LoginPage
{
    // include url of current page
    public static $URL = 'log-in/fr?redirect_to=https%3A%2F%2Fwordpress.com%2F';
    public static $homeUrl='';
    public static $login='(//a[@class="x-nav-link x-link"])[1]';
    public static $usernameField = '(//input[@class="form-text-input"])[1]';
    public static $continueButton= '(//button[@class="button form-button is-primary"])';
    public static $continueGoogleButton='(//button[@class="social-buttons__button button"])';
    public static $termOfServiceHyper='(//p[@class="login__form-terms"]//a)';
    public static $creataHyper='(//div[@class="wp-login__links"]//a)[1]';
    public static $emailLoginLinkHyper='(//div[@class="wp-login__links"]//a)[2]';
    public static $lostPasswordHyper='(//div[@class="wp-login__links"]//a)[3]';
    public static $backHyper='(//div[@class="wp-login__links"]//a)[4]';
    public static $vietnameseHyper='(//div[@class="translator-invite__content"]//a)';
    public static $passwordField='(//input[@class="form-text-input"])[2]';
    public static $loginButton='(//button[@class="button form-button is-primary"])';
    public static $personIcon='(//img[@class="gravatar"])';
    public static $logOutButton='(//button[@class="button sidebar__me-signout-button is-compact"])';
    public static $erroInput='(//div[@class="form-input-validation is-error"])';
    public static $eyes='//span[@class="form-password-input__toggle form-password-input__toggle-visibility"]';
    public static $typePassword='(//input[@type="password"][@class="form-text-input"])';
    public static $typeText='((//input[@type="text"][@class="form-text-input"])[2])';
    public static $limitedPassword='(//div[@class="notice is-error"])';
    public static $followedSites='(//span[@class="menu-link-text"])[1]';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
