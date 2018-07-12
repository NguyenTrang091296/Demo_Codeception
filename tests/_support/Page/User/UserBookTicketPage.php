<?php
namespace Page\User;

class UserBookTicketPage
{

    public static $URL1 = '/';
    public static $buttonSchedule = ['xpath' => '//a[contains(@href, \'/TuyenDuong/Index\')]'];
    public static $searchFile = ['xpath' => '//input[contains(@class,\'pull-right\')]'];
    public static $buttonSearch = ['xpath' => '//button[contains(@class,\'btn-default\')]'];
    public static $buttonBuyTicket = ['xpath' => '//a[contains(@class,\'br-btn-default btn-flat futa-book-ticket\')]'];
    public static $numberOfTickets = ['id' => 'soluong'];
    public static $buttonSubmit = ['xpath' => '//button[contains(@class,\'btn-primary pull-right\')]'];
    public static $messageSaveSuccess = 'Them Don hang thanh cong';
    public static $iconCart = ['xpath' => '//a[contains(@href, \'/HoaDon\')]'];
}
