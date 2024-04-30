<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\notificationController;
use App\Http\Controllers\sparepartController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\CountController;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    ///$data = ['page_name' => 'Home','greeting' => 'Hi there, Welcome'];
    //return view('admin/home/index')->with($data);
    return view('admin/home/index', ['page_name' => 'Home','greeting' => 'Hi there, Welcome']);

})->middleware('auth');

Route::get('/login', [AuthController::class,'loginView'])->name('login.show');
Route::post('/login', [AuthController::class,'loginPost'])->name('login.post');
Route::get('/ForgotPassword',[AuthController::class,'forgotView'])->name('forgot.view');
Route::post('/ForgotPassword',[AuthController::class,'forgotPost'])->name('forgot.post');
Route::get('/ResetPassword/{token}',[AuthController::class,'ResetPasswordView'])->name('ResetPassword.view');
Route::post('/ResetPassword/{token}',[AuthController::class,'ResetPasswordPost'])->name('ResetPassword.post');


Route::middleware('auth')->group(function () {
   
Route::get('/Admin.registration', [AuthController::class,'registrationView'])->name('registration.view');
Route::post('/Admin.registration', [AuthController::class,'registrationPost'])->name('registration.post');

Route::get('/Admin_record', [AuthController::class,'Admin_recordView'])->name('Admin_record.view');
Route::get('/delete.Admin/{id}', [AuthController::class,'DeleteAdmin'])->name('delete.Admin');
Route::get('/enable_disable.Admin/{id}', [AuthController::class,'enable_disable_Admin'])->name('enable_disable.Admin');

Route::get('/logout',[AdminController::class,'logout'])->name('logout');

Route::get('/profile', [AdminController::class,'profileView'])->name('profile.view');
Route::post('/profile', [AdminController::class,'profilePost'])->name('profile.post');

Route::get('/ChangePassword', [AdminController::class,'changePasswordView'])->name('changePassword.view');
Route::post('/ChangePassword', [AdminController::class,'changePasswordPost'])->name('changePassword.post');
});

Route::middleware('auth')->group(function () {
Route::get('/Add.category', [sparepartController::class,'categoryView'])->name('category.view');
Route::post('/Add.category', [sparepartController::class,'categoryPost'])->name('category.post');
Route::get('/CategoryRecord', [sparepartController::class,'CategoryRecordView'])->name('categoryrecord.view');
Route::get('/Edit/CategoryRecord/{id}', [sparepartController::class,'EditCategoryRecord'])->name('categoryrecord.edit');
Route::post('/Update/CategoryRecord', [sparepartController::class,'UpdateCategoryRecord'])->name('Update.CategoryRecord');
Route::get('delete.category/{id}', [sparepartController::class,'Delete_category'])->name('delete.category');
       
Route::get('/Add.sparepart', [sparepartController::class,'sparepartView'])->name('sparepart.view');
Route::post('/Add.sparepart', [sparepartController::class,'sparepartPost'])->name('sparepart.post');
Route::get('/stockin.Record', [sparepartController::class,'stockinRecordView'])->name('stockinRecord.view');
Route::get('delete.stockin/{id}', [sparepartController::class,'Delete_stockin'])->name('delete.stockin');
Route::get('/fetchsparepartDetails/{id}', [sparepartController::class, 'fetchsparepartDetails'])->name('fetch.sparepartDetails');

Route::get('/Add.stockin', [sparepartController::class,'stockinView'])->name('stockin.view');
Route::post('/Add.stockin', [sparepartController::class,'stockinPost'])->name('stockin.post');

Route::get('/delete.spare_part/{id}', [sparepartController::class,'Delete_spare_part'])->name('delete.spare_part');
Route::post('/stockSummary', [sparepartController::class,'stocksummaryPost'])->name('stocksummary.post');
Route::get('/stockSummary', [sparepartController::class,'stocksummaryView'])->name('stocksummary.view');

Route::get('/sparepartRecord', [sparepartController::class,'sparepartrecordView'])->name('sparepartrecord.View');
Route::get('/Edit.sparepartRecord/{id}', [sparepartController::class,'EditSparepartRecord'])->name('sparepartrecord.edit');
Route::post('/Update/sparepartRecord', [sparepartController::class,'UpdateSparepartRecord'])->name('Update.SparepartRecord');

});

Route::middleware('auth')->group(function () {
   
    Route::get('/push_Notification', [notificationController::class,'push_NotificationView'])->name('push_Notification.view');
    Route::post('/push_Notification', [notificationController::class,'push_NotificationPost'])->name('push_Notification.post');
     
    Route::get('/Notification/Record', [notificationController::class,'notificationRecordView'])->name('Notificationrecord.View');
    Route::get('/Edit.NotificationRecord/{id}', [notificationController::class,'EditNotificationRecord'])->name('Notificationrecord.edit');
    Route::post('/Update/NotificationRecord', [notificationController::class,'UpdateNotificationtRecord'])->name('Update.NotificationRecord');
    Route::get('/delete.Notification/{id}', [notificationController::class,'Delete_Notification'])->name('delete.Notification');

    Route::get('/vehicle_Tips', [notificationController::class,'vehicle_TipsView'])->name('vehicle_Tips.view');
    Route::post('/vehicle_Tips', [notificationController::class,'vehicle_TipsPost'])->name('vehicle_Tips.post');
    
    Route::get('/Vehicletips/Record', [notificationController::class,'vehicletipsrecordView'])->name('vehicletipsrecord.View');
    Route::get('/Edit.vehicletipsrecord/{id}', [notificationController::class,'EditvehicletipsRecord'])->name('vehicletipsrecord.edit');
    Route::post('/Update/vehicletipsrecord', [notificationController::class,'UpdatevehicletipsRecord'])->name('Update.vehicletipsrecord');
    Route::get('/delete.Vehicle.Tips/{id}', [notificationController::class,'Delete_vehicletipsrecord'])->name('delete.vehicletipsrecord');
});

Route::middleware('auth')->group(function () {
   
    Route::get('/ActivityLog.Record', [ActivityLogController::class,'ActivityLogrecord'])->name('ActivityLog.view');
});

Route::middleware('auth')->group(function () {
   
    Route::get('/countrecord', [CountController::class,'countUsers'])->name('countrecord');

});