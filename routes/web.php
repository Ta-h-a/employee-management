<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Models\Employee;
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

Route::get(
    '/',
    [HomeController::class,'index']
)->name('home.index');

Route::get("employee/deleted", [EmployeeController::class, 'indexDeleted'])->name('employee.deletedItems');

Route::get("employee/{employee}/update-department", [EmployeeController::class, 'indexUpdateDepartment'])->name('employee.indexUpdateDepartment');

Route::put('employee/{employee}/update-department',[EmployeeController::class,'updateDepartment'])->name('employee.updateDepartment');

Route::resource("employee",EmployeeController::class);