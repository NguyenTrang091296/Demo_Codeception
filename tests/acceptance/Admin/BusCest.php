<?php
use Step\Acceptance\Admin\BusStep as BusStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;


class BusCest
{
    /**

     * BusCest constructor.

     */
    public function __construct()
    {
        $this->fake                 = Faker\Factory::create();
        $this->username             = \Page\Admin\AdminLoginPage::$usernameValue;
        $this->password             = \Page\Admin\AdminLoginPage::$passwordValue;
        $this->randomLicensePlates  = '51A-' .$this->fake->numberBetween(1111,99999);
        $this->randomSeats          = $this->fake->numberBetween(16,60);

    }
    /**

     * @param AdminLoginStep $I

     */
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }
    /**

     * @param BusStep $I

     */
    public function createBus(BusStep $I)
    {
        $I->addBus($this->randomLicensePlates, $this->randomSeats);
    }
}
