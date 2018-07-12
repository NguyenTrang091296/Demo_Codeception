<?php
use Step\Acceptance\User\UserLoginStep as UserLoginStep;
use Step\Acceptance\User\RegisterStep as RegisterStep;
class UserLoginCest
{
    public function __construct()
    {
        $this->fake                     = Faker\Factory::create();
        $this->randomUsername           = 'Nguyen Thi Trang';
        $this->randomEmail              = 'trang'. $this->fake->numberBetween(100,999).'@gmail.com';
        $this->randomPhoneNumber        = '0166' .$this->fake->numberBetween(100000,9999999);
        $this->randomIdCustomer         = $this->fake->numberBetween(100000000,999999999);
        $this->randomAddress            = 'ADC' .$this->fake->numberBetween(100,999);
        $this->randomPassword           = '123';
        $this->randomConfirmPassword    = '123';

    }

    public function testRegister(AcceptanceTester $I, $scenario)
    {
        $I = new RegisterStep($scenario);
        $I->wantTo('Create new Account!');
        $I->register($this->randomUsername, $this->randomEmail, $this->randomPhoneNumber, $this->randomIdCustomer, $this->randomAddress, $this->randomPassword, $this->randomConfirmPassword);
    }

    public function Login(UserLoginStep $I)
    {
        $I->Login($this->randomEmail, $this->randomPassword);
    }


}
