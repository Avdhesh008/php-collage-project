<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\Admin\UserResumeController;
require __DIR__ . '/auth.php';
require __DIR__ . '/adminauth.php';
require __DIR__ . '/employerauth.php';

Route::get('/command', function () {
    \Artisan::call('make:model Jobpost -a');
    return 'done';
});
/////////////////////////////////////////////////////////
Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('employees', [App\Http\Controllers\Admin\EmployeeController::class, 'index']);
    Route::get('add_employee', [App\Http\Controllers\Admin\EmployeeController::class, 'add_employee']);
    Route::post('add_employee', [App\Http\Controllers\Admin\EmployeeController::class, 'add_employee_data']);
    Route::get('edit_employee/{id}', [App\Http\Controllers\Admin\EmployeeController::class, 'edit_emp']);
    Route::post('edit_employee', [App\Http\Controllers\Admin\EmployeeController::class, 'edit_employee']);
    Route::post('delete-employee/{id}', [App\Http\Controllers\Admin\EmployeeController::class, 'destroy']);
    Route::get('employee-block/{id}/{status}', [App\Http\Controllers\Admin\EmployeeController::class, 'userblock']);
    Route::get('client',[App\Http\Controllers\Admin\AdminController::class,'index']);
    Route::get('add_client', [App\Http\Controllers\Admin\AdminController::class, 'client']);
    Route::post('add_client', [App\Http\Controllers\Admin\AdminController::class, 'add_client']);
    Route::get('edit_client/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_client']);
    Route::post('delete-client/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroy']);

    
});
////////////////////////////////////////////////
Route::group(['prefix' => 'research',  'middleware' => 'auth:admin'], function () {
    Route::get('dashboard', function () {
        return view('research.dashboard');
    })->name('research.dashboard');
    Route::get('/', function () {
        return view('research.dashboard');
    })->name('research.dashboard');
    Route::post('create_pdf', [App\Http\Controllers\Admin\PdfCreateController::class, 'create_pdf']);
    Route::get('create_pdf', [App\Http\Controllers\Admin\PdfCreateController::class, 'create_pdf_get'])->name('research.create_pdf');
    Route::get('pdf_list', [App\Http\Controllers\Admin\PdfCreateController::class, 'index'])->name('pdf_list');
    Route::get('loadpdf/{id}', [App\Http\Controllers\Admin\PdfCreateController::class, 'loadpdfdata']);
    Route::get('loadpdf', [App\Http\Controllers\Admin\PdfCreateController::class, 'loadpdfdata']);
    Route::get('downloadpdf/{id}', [App\Http\Controllers\Admin\PdfCreateController::class, 'downloadpdf']);
    Route::get('client', [App\Http\Controllers\Admin\ResearchController::class, 'index']);
    Route::get('create_pdf/{id}',[App\Http\Controllers\Admin\ResearchController::class, 'pdf_page']);
    Route::post('pdf-feedback',[App\Http\Controllers\Admin\ResearchController::class, 'pdf_feedback']);
    Route::get('client-feedback',[App\Http\Controllers\Admin\ResearchController::class, 'feedback']);
    Route::get('return-feedback/{id}',[App\Http\Controllers\Admin\ResearchController::class, 'show_return']);
    Route::post('return-feedback',[App\Http\Controllers\Admin\ResearchController::class, 'return_feedback']);

    
});
Route::group(['middleware' => 'auth:web'], function () {
    Route::get('employer/deletesbenafit_emp/{id}', [JobpostController::class, 'deletesbenafit_emp']);
});
//////////////////////////////////////////////////////////
Route::group(['prefix' => 'hr',  'middleware' => 'auth:admin'], function () {
    Route::get('dashboard', function () {
        return view('hr.dashboard');
    })->name('hr.dashboard');
    Route::get('/', function () {
        return view('hr.dashboard');
    })->name('hr.dashboard');
    Route::get('employees', [App\Http\Controllers\Admin\HrController::class, 'index']);
    Route::get('add_employee', [App\Http\Controllers\Admin\HrController::class, 'add_employee']);
    Route::post('add_employee', [App\Http\Controllers\Admin\HrController::class, 'add_employee_data']);
    Route::get('edit_employee/{id}', [App\Http\Controllers\Admin\HrController::class, 'edit_emp']);
    Route::post('edit_employee', [App\Http\Controllers\Admin\HrController::class, 'edit_employee']);
    Route::post('delete-employee/{id}', [App\Http\Controllers\Admin\HrController::class, 'destroy']);
    Route::get('employee-block/{id}/{status}', [App\Http\Controllers\Admin\HrController::class, 'userblock']);
    
});

/////////////////////////////////////////////////////////////
Route::group(['prefix' => 'tlsales',  'middleware' => 'auth:admin'], function () {
    Route::get('dashboard', function () {
        return view('tlsales.dashboard');
    })->name('tlsales.dashboard');
    Route::get('/', function () {
        return view('tlsales.dashboard');
    })->name('tlsales.dashboard');
    Route::get('tlsales', [App\Http\Controllers\Admin\TlSalesController::class, 'index']);
    Route::post('edit_client', [App\Http\Controllers\Admin\TlSalesController::class, 'edit_client']);
    Route::get('edit_client/{id}', [App\Http\Controllers\Admin\TlSalesController::class, 'edit_client1']);
    Route::post('assign', [App\Http\Controllers\Admin\TlSalesController::class, 'assign']);
    // Route::post('delete-client/{id}', [App\Http\Controllers\Admin\TlSalesController::class, 'destroy']);
});


////////////////////////////////////////////////////////
Route::group(['prefix' => 'tlresearch',  'middleware' => 'auth:admin'], function () {
    Route::get('dashboard', function () {
        return view('tlresearch.dashboard');
    })->name('tlresearch.dashboard');
    Route::get('/', function () {
        return view('tlresearch.dashboard');
    })->name('tlresearch.dashboard');
    Route::get('client', [App\Http\Controllers\Admin\TlResearchController::class, 'index']);
    Route::get('assign/{id}', [App\Http\Controllers\Admin\TlResearchController::class, 'assign']); 
    Route::post('assign-check', [App\Http\Controllers\Admin\TlResearchController::class, 'assign_check']);

});

////////////////////////////////////////////////////////
Route::group(['prefix' => 'sales',  'middleware' => 'auth:admin'], function () {
    Route::get('dashboard', function () {
        return view('sales.dashboard');
    })->name('sales.dashboard');
    Route::get('/', function () {
        return view('sales.dashboard');
    })->name('sales.dashboard');
    Route::get('client', [App\Http\Controllers\Admin\SalesController::class, 'index']);
    Route::get('edit-client/{id}', [App\Http\Controllers\Admin\SalesController::class, 'client_edit']);
    Route::post('edit-client', [App\Http\Controllers\Admin\SalesController::class, 'update']);
    Route::get('assign-to/{id}', [App\Http\Controllers\Admin\SalesController::class, 'get_data']);
    Route::post('assign-to', [App\Http\Controllers\Admin\SalesController::class, 'assignto']);
    Route::get('client-feedback', [App\Http\Controllers\Admin\SalesController::class, 'feedback']);
    Route::get('return-feedback/{id}', [App\Http\Controllers\Admin\SalesController::class, 'return_feed']);
    Route::post('return-feedback', [App\Http\Controllers\Admin\SalesController::class, 'return_feedback']);

});

////////////////////////////////////////////////////////
Route::group(['prefix' => 'email',  'middleware' => 'auth:admin'], function () {
    Route::get('dashboard', function () {
        return view('email.dashboard');
    })->name('email.dashboard');
    Route::get('/', function () {
        return view('email.dashboard');
    })->name('email.dashboard');

    Route::get('client', [App\Http\Controllers\Admin\EmailController::class, 'index']);
    Route::get('add_client', [App\Http\Controllers\Admin\EmailController::class, 'client']);
    Route::post('add_client', [App\Http\Controllers\Admin\EmailController::class, 'add_client']);
    Route::get('edit_client/{id}', [App\Http\Controllers\Admin\EmailController::class, 'edit_client']);
    Route::post('delete-client/{id}', [App\Http\Controllers\Admin\EmailController::class, 'destroy']);
});
Route::get('pdfview', function () {
    return view('pdfpreview');
});