<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeFormRequest;
use App\Models\Employee;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // private static function getData() {
    //     return [
    //         ['id' => 1, 'f_name' => 'American Standard Strat', 'l_name' => 'surname1', 'email' => 'Fender','phone_no'=> 2134,'department'=> 'CS','salary'=> 8449],
    //         ['id' => 2, 'f_name' => 'Starla S2', 'l_name' => 'surname2', 'email' => 'PRS','phone_no'=> 654231,'department'=> 'EC','salary'=> 465],
    //         ['id' => 3, 'f_name' => 'Explorer', 'l_name' => 'surname3', 'email' => 'Gibson','phone_no'=> 7986754,'department'=> 'ENC','salary'=> 46781],
    //         ['id' => 4, 'f_name' => 'Talman', 'l_name' => 'surname4', 'email' => 'Ibanez','phone_no'=> 987654,'department'=> 'CV','salary'=> 98645],
    //     ];
    // }

    public function index()
    {
        // GET
        // return "Hello";

        return view('employee.index',[
            // 'employees' => Employee::all()
            'employees' => Employee::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // GET
        return view("employee.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeFormRequest $request)
    {
        // POST
        $data = $request->validated();

        info($data);

        Employee::create($data);

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeFormRequest $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeFormRequest $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeFormRequest $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeFormRequest $employee)
    {
        //
    }
}
