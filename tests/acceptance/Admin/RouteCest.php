<?php

use Step\Acceptance\Admin\RouteStep as RouteStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;

class RouteCest
{
    /**

     * RouteCest constructor.

     */
    public function __construct()
    {
       $this->fake               = Faker\Factory::create();
       $this->username           = \Page\Admin\AdminLoginPage::$usernameValue;
       $this->password           = \Page\Admin\AdminLoginPage::$passwordValue;
       $this->randomCodeRoute    = 'CodeRoute' .$this->fake->numberBetween(1,999);
       $this->randomWhereTo      = 'WhereTo' .$this->fake->numberBetween(1,999);
       $this->randomWhereStart   = 'WhereStart' .$this->fake->numberBetween(1,999);
       $this->randomWhereToNew   = 'WhereTo New' .$this->fake->numberBetween(1,9);
       $this->randomWhereStartNew= 'WhereStart New' .$this->fake->numberBetween(1,9);
       $this->randomLength       = $this->fake->numberBetween(50,9999);
       $this->randomTime         = $this->fake->numberBetween(0,23) .':' .$this->fake->numberBetween(00,59);
       $this->randomPrice        = $this->fake->numberBetween(30000,1000000);
        $this->randomLengthNew   = $this->fake->numberBetween(50,9999);
        $this->randomTimeNew     = $this->fake->numberBetween(0,23) .':' .$this->fake->numberBetween(00,59);
        $this->randomPriceNew    = $this->fake->numberBetween(30000,1000000);
    }
    /**

     * @param AdminLoginStep $I

     */
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }
    /**

     * @param RouteStep $I

     */
    public function createRoute(routeStep $I)
    {
        $I->addRoute( $this->randomCodeRoute, $this->randomWhereTo, $this->randomWhereStart, $this->randomLength, $this->randomTime, $this->randomPrice);
    }
    /**

     * @param RouteStep $I

     */
    public function EditRoute(routeStep $I)
    {
        $I->EditRoute( $this->randomCodeRoute, $this->randomWhereToNew, $this->randomWhereStartNew, $this->randomLengthNew, $this->randomTimeNew, $this->randomPriceNew);
    }
    /**

     * @param RouteStep $I
     * @throws \Exception
     */
    public function DeleteRoute(routeStep $I)
    {
        $I -> DeleteRoute($this->randomCodeRoute);
    }
}
