<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\IndexAdminController;
use App\Http\Controllers\admin\InforStudentAdminController;
use App\Http\Controllers\Auth\LoginAuthController;
use App\Http\Controllers\Auth\RegisterAuthController;
use App\Http\Controllers\Auth\ResetAuthController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\admin\BookRoomController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\admin\MapController;
use App\Http\Controllers\admin\UserBookRoomController;
use App\Http\Controllers\admin\PriceController;
use App\Http\Controllers\manager\IndexManagerController;
use App\Http\Controllers\manager\UserManagerController;
use App\Http\Controllers\manager\RoomManagerController;
use App\Http\Controllers\manager\InforManagerController;
use App\Http\Controllers\manager\BookRoomManagerController;


Route::pattern('id', '[0-9]+');
Route::pattern('slug', '(.*)');
Route::pattern('typeId', '[0-9]+');

//admin
Route::prefix('/')->middleware('auth')->group(function () {
    // trangchu
    Route::get('/', [IndexAdminController::class, 'trangchu'])->name('admin.trangchu');
    //thong tin sinh vien
    Route::get('/thong-tin-sinh-vien', [InforStudentAdminController::class, 'thongtinsinhvien'])->name('admin.thongtin.sinhvien');
    Route::post('/them-thong-tin-sinh-vien', [InforStudentAdminController::class, 'addThongTinSV'])->name('admin.them.thongtin');
    //thong tin sinh vien tai khoan
    Route::post('/thong-tin-sinh-vien/{id}', [InforStudentAdminController::class, 'postResetThongTin'])->name('admin.thongtin.capnhat');
    //tinh thanh
    Route::get('/select-tinhthanh', [InforStudentAdminController::class, 'getTinhThanh'])->name('admin.select.tinhthanh');
    //dang ky phong
    Route::get('/dang-ky-phong', [BookRoomController::class, 'dangKyPhong'])->name('admin.dangkyphong');
    Route::post('/dang-ky-phong/{id}/{id_user_infor}', [BookRoomController::class, 'postDKP'])->name('admin.dangky.phong');

    Route::get('/loc-phong', [BookRoomController::class, 'locPhong'])->name('admin.locphong');
    //thong tin phong da dang ky
    Route::get('/thong-tin-phong-da-dang-ky', [UserBookRoomController::class, 'ttPhongDK'])->name('admin.thongtinphong.dk');
    //ban do
    Route::get('/ban-do', [MapController::class, 'banDo'])->name('admin.bando');
    //lien he
    Route::get('/lien-he', [ContactController::class, 'lienHe'])->name('admin.lien.he');
    //tong hop phi ktx
    Route::get('/tong-hop-bang-gia-phi', [PriceController::class, 'bangGia'])->name('admin.bang.gia');
    //thanh toan online
    Route::get('/huong-dan-va-thanh-toan-online', [PriceController::class, 'payOnline'])->name('admin.thanhtoan.online');
    Route::get('/payment', [PriceController::class, 'payment'])->name('admin.payment');
    Route::post('/charge', [PriceController::class, 'charge'])->name('admin.charge');
    Route::get('/paymentsuccess', [PriceController::class, 'paymentsuccess'])->name('admin.payment_success');
    Route::get('/paymenterror', [PriceController::class, 'paymenterror'])->name('admin.payment_error');

    Route::get('/huong-dan-thanh-toan-tai-khoan-ngan-hang', [PriceController::class, 'tknh'])->name('admin.thanhtoan.tknh');
});
//manager
Route::prefix('/manager')->middleware('auth')->group(function () {
    // trangchu
    Route::get('/trang-chu', [IndexManagerController::class, 'trangchu'])->name('manager.trangchu');
    //quan ly tai khoan
    Route::get('/quan-ly-tai-khoan', [UserManagerController::class, 'qltaiKhoan'])->name('manager.qltaikhoan');
    //quan ly phong
    Route::get('/quan-ly-phong', [RoomManagerController::class, 'qlPhong'])->name('manager.qlphong');
    //quan ly sinh vien
    Route::get('/quan-ly-sinh-vien', [InforManagerController::class, 'qlSinhVien'])->name('manager.qlsinhvien');
    Route::get('/xem-chi-tiet-sinh-vien/{id}', [InforManagerController::class, 'chiTietSV'])->name('manager.chitiet');
    //quan ly dat phong
    Route::get('/quan-ly-dat-phong', [BookRoomManagerController::class, 'datPhong'])->name('manager.qldatphong');
    Route::post('/xac-nhan-dang-ky-phong/{id_user_infor}', [BookRoomManagerController::class, 'xacNhanDangKy'])->name('manager.xacnhan.dangky');
    
});

// Auth
Route::prefix('/auth')->group(function () {
    Route::get('/login', [LoginAuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'postCheck'])->name('auth.login');

    Route::get('/register', [RegisterAuthController::class, 'register'])->name('auth.register');
    Route::post('/register', [RegisterAuthController::class, 'postAdd'])->name('auth.register');

    Route::get('/reset-password', [ResetAuthController::class, 'resetPass'])->name('auth.reset.password');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/logout-manager', [AuthController::class, 'logoutManager'])->name('auth.logout.manager');
    
});
