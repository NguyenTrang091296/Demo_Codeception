<?php
use Step\Acceptance\User\UserLoginStep as UserLoginStep;
use Step\Acceptance\User\RegisterStep as RegisterStep;
use Step\Acceptance\User\UserBookTicketStep as UserBookTicketStep;

class UserBookTicketCest
{
    public function __construct()
    {
        $this->fake                     = Faker\Factory::create();
        $this->randomEmail              = 'nguyentrang0912@gmail.com';
        $this->randomPassword           = '123';

    }
    public function _before(UserLoginStep $I)
    {
        $I->Login($this->randomEmail, $this->randomPassword);
    }

    public function UserBookTicket(UserBookTicketStep $I)
    {
        $I->BookTickets('DALAT-NHATRANG', '3');
        $I->CheckCart();
    }

}
