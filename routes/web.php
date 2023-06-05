<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Backend\AdminAdddataController;




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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');


    Route::get('/admin/pasient/transaction', [AdminController::class, 'AdminPasientTransaction'])->name('admin.pasienttransaction');



}); //End Group Admin Middleware


Route::middleware(['auth','role:doctor'])->group(function(){

    Route::get('/doctor/dashboard', [DoctorController::class, 'DoctorDashboard'])->name('doctor.dashboard');

    Route::get('/doctor/email', [DoctorController::class, 'DoctorEmail'])->name('doctor.email');

    Route::get('/doctor/messages', [DoctorController::class, 'DoctorMessages'])->name('doctor.messages');

    // Route::get('/doctor/calendar', [DoctorController::class, 'DoctorMessages'])->name('doctor.messages');

    Route::get('/doctor/schedule', [DoctorController::class, 'DoctorSchedule'])->name('doctor.schedule');

    Route::get('/doctor/pasient/list', [DoctorController::class, 'DoctorPasientList'])->name('doctor.pasientlist');



}); //End Group Doctor Middleware

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');


//Admin Group Middleware
Route::middleware(['auth','role:admin'])->group(function(){

    //CRUD doctor data all route
    Route::controller(AdminAdddataController::class)->group(function(){

        Route::get('/admin/doctordata', 'AdminDoctorData')->name('admin.doctordata');
        Route::get('/admin/add/doctordata', 'AddDoctorData')->name('admin.add_doctordata');
        Route::post('/admin/doctordata/store', 'DoctorDataStore')->name('store.data_doctor');
        Route::get('/edit/doctordata/{no_str}', 'EditDoctorData')->name('edit.doctor');
        Route::post('/update/doctordata', 'UpdateDoctorData')->name('update.doctor');
        Route::get('/delete/doctordata/{no_str}', 'DeleteDoctorData')->name('delete.doctor');
});//End CRUD doctor data all route

    //CRUD clinic data all route
    Route::controller(AdminAdddataController::class)->group(function(){

        Route::get('/admin/clinic', 'AdminClinic')->name('admin.clinic');
        Route::get('/admin/add/clinicdata', 'AddClinicData')->name('admin.add_clinicdata');
        Route::post('/admin/clinicdata/store', 'ClinicDataStore')->name('store.data_clinic');
        Route::get('/edit/clinicdata/{id_klinik}', 'EditClinicData')->name('edit.clinic');
        Route::post('/update/clicicdata', 'UpdateClinicData')->name('update.clinic');
        Route::get('/delete/clinicdata/{id_klinik}', 'DeleteClinicData')->name('delete.clinic');
        Route::get('/exportClinic', 'exportClinic')->name('export.clinic');
    });//CRUD clinic data all route

    //CRUD skintype data all route
    Route::controller(AdminAdddataController::class)->group(function(){

        Route::get('/admin/skintype', 'AdminSkinType')->name('admin.skintype');
        Route::get('/admin/add/skintype', 'AddSkinType')->name('admin.add_skintype');
        Route::post('/admin/skintypedata/store', 'SkintypeDataStore')->name('store.data_skintype');
        Route::get('/edit/skindata/{id_JK}', 'EditSkintypeData')->name('edit.skintype');
        Route::post('/update/skintypedata', 'UpdateSkintypeData')->name('update.skintype');
        Route::get('/delete/skintypedata/{id_JK}', 'DeleteSkintypeData')->name('delete.skintype');
        Route::get('/data/skintype', 'exportSkintypeData')->name('export.skintype');
    });//CRUD skintype data all route

    //CRUD gejala data all route
    Route::controller(AdminAdddataController::class)->group(function(){
        Route::get('/admin/symptoms', 'AdminSymptoms')->name('admin.symptoms');
        Route::get('/admin/add/gejala', 'AddGejala')->name('admin.add_gejala');
        Route::post('/admin/gejaladata/store', 'GejalaDataStore')->name('store.data_gejala');
        Route::get('/edit/gejaladata/{kd_gejala}', 'EditGejalaData')->name('edit.gejala');
        Route::post('/update/gejaladata', 'UpdateGejalaData')->name('update.gejala');
        Route::get('/delete/gejalapedata/{kd_gejala}', 'DeleteGejalaData')->name('delete.gejala');
    });//CRUD Gejala data all route

    //CRUD Rule data all route
    Route::controller(AdminAdddataController::class)->group(function(){

        Route::get('/admin/rules', 'AdminRules')->name('admin.rules');
        Route::get('/admin/add/rules', 'AddRules')->name('admin.add_rules');
        Route::post('/admin/rulesdata/store', 'RulesDataStore')->name('store.data_rules');
        Route::get('/aturan/edit_rule/{id_JK}', 'EditAturan')->name('aturan.edit');
        Route::post('/update/rulesdata', 'UpdateRulesData')->name('update.rules');
        Route::get('/delete/rulespedata/{id_JK}', 'DeleteRulesData')->name('delete.rules');

    });//CRUD Rule data all route

    //CRUD Admin data all route
    Route::controller(AdminAdddataController::class)->group(function(){

        Route::get('/admin/data', 'AdminData')->name('admin.data');
        Route::get('/admin/add/admin', 'AddAdmin')->name('admin.add_admin');
        Route::post('/admin/admindata/store', 'AdminDataStore')->name('store.data_admin');

    });//CRUD Admin data all route

    //CRUD Pasient data all route
    Route::controller(AdminAdddataController::class)->group(function(){
        Route::get('/admin/data/pasient', 'AdminPasientData')->name('admin.pasientdata');
    });//CRUD Pasient data all route

    //CRUD Admin data all route
    Route::controller(AdminAdddataController::class)->group(function(){

        Route::get('/admin/data/perawatan', 'PerawatanData')->name('admin.perawatan');
        Route::get('/admin/add/perawatan', 'AddPerawatan')->name('admin.add_perawatan');
        Route::post('/admin/perawatan/store', 'PerawatanDataStore')->name('store.data_perawatan');
        Route::get('/edit/perawatandata/{id_perwatan}', 'EditPerawatanData')->name('edit.perawatan');
        Route::post('/update/perawatan', 'UpdatePerawatanData')->name('update.perawatan');
        Route::get('/delete/perawatan/{id_perwatan}', 'DeletePerawatanData')->name('delete.perawatan');
        Route::get('/data/perawatan', 'PerawatanExport')->name('export.perawatan');

    });//CRUD Admin data all route


    //Temu Dokter data all route
    Route::controller(AdminAdddataController::class)->group(function(){

        Route::get('/admin/data/temudoker', 'TemuDokter')->name('admin.temu');
        Route::get('/admin/add/Temu', 'AddTemu')->name('admin.add_temu');
        Route::post('/admin/temu/store', 'TemuDataStore')->name('store.data_temu');
        Route::get('/edit/temudata/{id_pasient}', 'EditTemuData')->name('edit.temu');
        Route::get('/export/jadwaldokter', 'exportJadwalDokter')->name('export.jadwal_dokter');
    });//Temu Dokter data all route


    //Sesi data all route
    Route::controller(AdminAdddataController::class)->group(function(){

        Route::get('/admin/data/sesi', 'SesiDokter')->name('admin.sesi');
        Route::get('/admin/add/sesi', 'AddSesi')->name('admin.add_sesi');
        Route::post('/admin/sesi/store', 'SesiDataStore')->name('store.data_sesi');
        Route::get('/edit/sesidata/{id_sesi}', 'EditSesiData')->name('edit.sesi');
        Route::post('/update/sesi', 'UpdateSesiData')->name('update.sesi');
        Route::get('/delete/sesi/{id_sesi}', 'DeleteSesiData')->name('delete.sesi');
        Route::get('/export/sesi', 'exportSesi')->name('export.sesi');
    });//Temu Dokter data all route


    //Surat data all route
    Route::controller(AdminAdddataController::class)->group(function(){

        Route::get('/admin/data/surat', 'SuratJanji')->name('admin.surat_janji');
        Route::get('/export/surat', 'exportSurat')->name('export.surat');
    });//Surat data all route

    //Transaksi All Route
    Route::controller(AdminAdddataController::class)->group(function(){

        Route::get('/admin/data/transaksi', 'TransaksiPasient')->name('transaksi.pasient');
        Route::get('/admin/add/transaksi', 'AddTransaksi')->name('admin.add_transaksi');
        Route::post('/admin/sesi/transaksi', 'TransaksiStore')->name('store.data_transaksi');
    });//Transaksi data all route

    //diagnosa data all route
    Route::controller(AdminAdddataController::class)->group(function(){

        Route::get('/diagnosa', 'Diagnosa')->name('diagnosa.kulit');
        Route::post('/cek/diagnosa', 'CekDiagnosa')->name('diagnosa.cek');
        Route::get('/hasil/diagnosa', 'HasilDiagnosa')->name('diagnosa.hasil');
    });//diagnosa data all route


}); //End Group Admin Middleware
