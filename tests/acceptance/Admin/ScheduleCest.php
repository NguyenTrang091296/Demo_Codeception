<?php

use Step\Acceptance\Admin\ScheduleStep as ScheduleStep;
use Step\Acceptance\Admin\BusStep as BusStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;

class ScheduleCest
{
    public function __construct()
    {
        $this->fake                 = Faker\Factory::create();
        $this->username             = \Page\Admin\AdminLoginPage::$usernameValue;
        $this->password             = \Page\Admin\AdminLoginPage::$passwordValue;
        $this->randomCodeRoute      = 'CodeRoute' .$this->fake->numberBetween(1,999);
        $this->randomWhereTo        = 'WhereTo' .$this->fake->numberBetween(1,999);
        $this->randomWhereStart     = 'WhereStart' .$this->fake->numberBetween(1,999);
        $this->randomLength         = $this->fake->numberBetween(50,9999);
        $this->randomTime           = $this->fake->numberBetween(0,23) .':' .rand(00,59);
        $this->randomPrice          = $this->fake->numberBetween(30000,1000000);
        $this->randomLicensePlates  = '51A-' .random_int(1111,99999);
        $this->randomSeats          = $this->fake->numberBetween(16,60);
        $this->searchDayStart       = '2018-08-15';
        $this->searchTime           = '8:00';


    }
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }

       public function testRoute(AcceptanceTester $I, $scenario)
    {

        $I = new \Step\Acceptance\Admin\RouteStep($scenario);
        $I->wantTo('Create new Route!');
        $I->addRoute( $this->randomCodeRoute, $this->randomWhereTo, $this->randomWhereStart, $this->randomLength, $this->randomTime, $this->randomPrice);
    }
    public function testBus(AcceptanceTester $I, $scenario)
    {
        $I = new \Step\Acceptance\Admin\BusStep($scenario);
        $I->wantTo('Create new Bus!');
        $I->addBus($this->randomLicensePlates, $this->randomSeats);
    }
    public function createSchedule(ScheduleStep $I, $scenario)
    {
        $I = new  ScheduleStep($scenario);
        $I->addSchedule($this->randomCodeRoute, $this->randomLicensePlates, $this->searchDayStart, $this->searchTime);
    }

}
