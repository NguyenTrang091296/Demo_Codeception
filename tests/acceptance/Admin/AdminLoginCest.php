<?php

use  Step\Acceptance\Admin\AdminLoginStep as loginAccount;

class AdminLoginCest
{
    /**

     * @param loginAccount $I

     */
    public function LoginAdmin(LoginAccount $I)
    {
        $I->loginAccount(Page\Admin\AdminLoginPage::$usernameValue,Page\Admin\AdminLoginPage::$passwordValue);
    }
}
