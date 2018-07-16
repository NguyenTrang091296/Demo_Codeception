<?php
namespace Step\Acceptance\Admin;
use Page\Admin\RoutePage as RoutePage;

class RouteStep extends \AcceptanceTester
{
    /**

     * @param $codeRoute

     * @param $whereStart

     * @param $whereTo

     * @param $length

     * @param $time

     * @param $price

     */
    public function addRoute($codeRoute, $whereStart, $whereTo, $length, $time, $price)
    {
        $I = $this;
        $I->wantTo('Tao tuyen duong moi!');
        $I->amOnPage(RoutePage::$url);
        $I->click(RoutePage::$buttonNew);
        $I->fillField(RoutePage::$codeRoute, $codeRoute);
        $I->fillField(RoutePage::$whereStart, $whereStart);
        $I->fillField(RoutePage::$whereTo, $whereTo);
        $I->fillField(RoutePage::$length, $length);
        $I->fillField(RoutePage::$time, $time);
        $I->fillField(RoutePage::$price, $price);
        $I->click(RoutePage::$buttonAddNew);
        $I->see(RoutePage::$messageSaveSuccess);
    }
    /**

     * @param $codeRoute

     * @param $whereStart

     * @param $whereTo

     * @param $length

     * @param $time

     * @param $price

     */
    public function EditRoute($codeRoute, $whereStart, $whereTo, $length, $time, $price)
    {
        $I = $this;
        $I->wantTo('Sua tuyen duong vua tao!');
        $I->amOnPage(RoutePage::$url);
        $I->SearchRoute($codeRoute);
        $I->click(RoutePage::$buttonEdit);
        $I->fillField(RoutePage::$whereTo, $whereTo);
        $I->fillField(RoutePage::$whereStart, $whereStart);
        $I->fillField(RoutePage::$length, $length);
        $I->fillField(RoutePage::$time, $time);
        $I->fillField(RoutePage::$price, $price);
        $I->click(RoutePage::$buttonEdit);
        $I->see(RoutePage::$messageEditSuccess);
    }
    /**

     * @param $codeRoute

     */
    public function SearchRoute($codeRoute)
    {
        $I = $this;
        $I->wantTo('Tìm tuyen duong vua tao!');
        $I->fillField(RoutePage::$buttonSearch, $codeRoute);
    }
    /**

     * @param $codeRoute

     * @throws \Exception

     */
    public function DeleteRoute($codeRoute)
    {
        $I = $this;
        $I->wantTo('Xoa tuyen duong vua tao!');
        $I->amOnPage(RoutePage::$url);
        $I->SearchRoute($codeRoute);
        $I->click(RoutePage::$Buttondelete);
        $I->waitForElementVisible(RoutePage::$buttonContinue,30);
        $I->wantTo('Test with delete Route then accept');
        $I->click(RoutePage::$ButtonDeleteAcept);
        $I->wait(1);
        $I->acceptPopup();
    }

}