<?php



class WelcomeCstCest
{

	// tests
	public function tryWelcomePage(AcceptanceTester $I)
	{
		$I->am('Guest');
		$I->wantTo('Test my congratulations page!');
		$I->lookForwardTo('See page.');

		$I->amOnPage('/');
		$I->see('Congratulations!');
	}



	public function openAdminer(AcceptanceTester $I)
	{
		$I->amOnPage('/');

		$I->seeLink('tool Adminer');
		$I->click('tool Adminer');

		$I->seeInTitle('Login - Adminer');
	}
}
