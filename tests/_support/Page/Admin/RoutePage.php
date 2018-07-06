<?php
namespace Page\Admin;

class RoutePage
{
    public static $url = '/Admin/ADTuyenDuong';

    public static $buttonNew = ['xpath'=> '//a[contains(@class, \'btn-primary\')]'];
//    public static $editButton = ['class' => 'fa fa-fw fa-edit'];
   public static $Buttondelete = ['xpath' => '//a[contains(@class, \'btn-xs\')]'];
   public static $ButtonDeleteAcept = ['xpath' => '//button[contains(@class, \'btn-primary\')]'];
//    public static $detailTuyenDuongButton = ['class' => 'btn btn-primary'];
    public static $MessageDelete =['Thông báo xóa?'];
    public static $MessageDeleteSuccess =['Xóa thành công'];
    public static $MessageDeleteFailed =['Xóa thất bại'];
    public static $codeRoute = ['id' => 'MS_TUYEN'];

    public static $whereStart = ['id' => 'BENDI'];

    public static $whereTo = ['id' => 'BENDEN'];

    public static $length = ['id' => 'QUANGDUONG'];

    public static $time = ['id' => 'THOIGIAN'];

    public static $price = ['id' => 'GIAVE'];
    public static $buttonEdit = ['class' => 'btn-default'];
    public static $buttonSearch = ['xpath' =>'//input [contains(@class, \'form-control input-sm\')]'];
    public static $buttonAddNew = ['class' => 'btn-default'];

    public static $messageSaveSuccess = 'Thêm thành công tuyến đường';
    public static $messageEditSuccess = 'cập nhật thành công tuyến đường';

//    public static $quayLaiButton = ['xpath' => './/*[@id=\'page-wrapper\']/div/div/div[3]/a'];
//
//    public static $capNhatButton = ['xpath' => './/*[@id=\'page-wrapper\']/div/div/div[2]/div/div/form/div/div[7]/div/input'];


}
