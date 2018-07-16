<?php
namespace Page\Admin;
/**

 * Class RoutePage

 * @package Page\Admin

 */
class RoutePage
{
    public static $url = '/Admin/ADTuyenDuong';
    public static $buttonNew = ['xpath'=> '//a[contains(@class, \'btn-primary\')]'];
    public static $Buttondelete = ['xpath' => '//a[contains(@class, \'btn-xs\')]'];
    public static $ButtonDeleteAcept = ['xpath' => '//button[contains(@class, \'btn-primary\')]'];
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
}
