<?php

use Step\Acceptance\Admin\RouteStep as RouteStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;

class RouteCest
{
    public function __construct()
    {
       $this->fake               = Faker\Factory::create();
       $this->username           = \Page\Admin\AdminLoginPage::$usernameValue;
       $this->password           = \Page\Admin\AdminLoginPage::$passwordValue;
       $this->randomCodeRoute    = 'CodeRoute' .rand(1,999);
       $this->randomWhereTo      = 'WhereTo' .rand(1,999);
       $this->randomWhereStart   = 'WhereStart' .rand(1,999);
       $this->randomWhereToNew   = 'WhereTo New' .rand(1,9);
       $this->randomWhereStartNew= 'WhereStart New' .rand(1,9);
       $this->randomLength       = rand(50,9999);
       $this->randomTime         = rand(0,23) .':' .rand(00,59);
       $this->randomPrice        = rand(30000,1000000);
        $this->randomLengthNew   = rand(50,9999);
        $this->randomTimeNew     = rand(0,23) .':' .rand(00,59);
        $this->randomPriceNew    = rand(30000,1000000);
    }
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }
    // tests
    public function createRoute(routeStep $I)
    {
        $I->addRoute( $this->randomCodeRoute, $this->randomWhereTo, $this->randomWhereStart, $this->randomLength, $this->randomTime, $this->randomPrice);

    }
    public function EditRoute(routeStep $I)
    {
        $I->EditRoute( $this->randomCodeRoute, $this->randomWhereToNew, $this->randomWhereStartNew, $this->randomLengthNew, $this->randomTimeNew, $this->randomPriceNew);

    }
    public function DeleteRoute(routeStep $I)
    {
        $I -> DeleteRoute($this->randomCodeRoute);
    }
}
