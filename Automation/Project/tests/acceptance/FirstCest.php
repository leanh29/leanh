<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/log-in');
        $I->fillField('//*[@id="usernameOrEmail"','leanhanh');
        $I->click('//*[@id="primary"]/div/main/div[2]/div[1]/div/form/div[1]/div[2]/button');
        $I->wait(5);
        $I->fillField('//*[@id="password"]','leanhbb2909');
        $I->click('//*[@id="primary"]/div/main/div[2]/div[1]/div/form/div[1]/div[2]/button');
        $I->wait(5);
        $I->see('Reader');
    }
    // tests

}

