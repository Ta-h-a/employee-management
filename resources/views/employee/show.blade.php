@extends('layout')

@section('content')

<div>
    <div>
        <li>UUID: {{$employee['id']}}</li>
        <li>First Name: {{$employee['f_name']}}</li>
        <li>Last Name: {{$employee['l_name']}}</li>
        <li>Email: {{$employee['email']}}</li>
        <li>Phone Number: {{$employee['phone_no']}}</li>
        <li>department: {{$employee['department']}}</li>
        <li>salary: {{$employee['salary']}}</li>
        
        <form action="{{ route("employee.destroy", ['employee'=> $employee['id'] ]) }}" method="POST">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <button style="background-color: tomato; text-decoration: none; color: black;font-size: 20px" type="submit">Delete</button>
        </form>
        <form action="{{ route("employee.indexUpdateDepartment", $employee['id']) }}" method="GET">
            @csrf
            <button style="background-color: lightgreen; text-decoration: none; color: black;font-size: 20px" type="submit">Update Department</button>
        </form>
    </div>
</div>

@endsection