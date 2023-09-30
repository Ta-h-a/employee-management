@extends('layout')

@section('content')
<div>
    This is Employees Index Page
    <h2>Details:</h2>
    <div style="display: flex;justify-content: space-evenly; flex-wrap: wrap">
        @if (count($employee) > 0)
            @foreach ($employees as $employee)
                <div style="background-color: teal;border-radius: 10px;margin: 10px; padding: 15px">
                    <h3>Employee {{$employee['uuid']}}</h3>
                    {{-- <ul> --}}
                        <li>First Name: {{$employee['f_name']}}</li>
                        <li>Last Name: {{$employee['l_name']}}</li>
                        <li>Email: {{$employee['email']}}</li>
                        <li>Phone Number: {{$employee['phone_no']}}</li>
                        <li>department: {{$employee['department']}}</li>
                        <li>salary: {{$employee['salary']}}</li>


                    {{-- </ul> --}}
                </div>
            @endforeach
        @else
                <div>
                    No employees found
                </div>
        @endif
    </div>
</div>
@endsection