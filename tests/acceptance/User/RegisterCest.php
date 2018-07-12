<?php
use Step\Acceptance\User\RegisterStep as RegisterStep;
class RegisterCest
{
    public function __construct()
    {
        $this->fake                     = Faker\Factory::create();
        $this->randomUsername           = 'Nguyen Thi Trang';
        $this->randomEmail              = 'Trang'. $this->fake->numberBetween(100,999).'@gmail.com';
        $this->randomPhoneNumber        = '0166' .$this->fake->numberBetween(100000,9999999);
        $this->randomIdCustomer         = $this->fake->numberBetween(100000000,999999999);
        $this->randomAddress            = 'ADC' .$this->fake->numberBetween(100,999);
        $this->randomPassword           = 'admin123';
        $this->randomConfirmPassword    = 'admin123';

    }
    public function register(RegisterStep $I)
    {
        $I->register($this->randomUsername, $this->randomEmail, $this->randomPhoneNumber, $this->randomIdCustomer, $this->randomAddress, $this->randomPassword, $this->randomConfirmPassword);

    }
}
