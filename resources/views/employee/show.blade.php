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
    </div>
</div>

@endsection