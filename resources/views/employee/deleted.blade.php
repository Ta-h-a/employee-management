@extends('layout')
@section("navbar")
<div class="navbar bg-base-100 morph" data-theme="forest">
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-xl" href="{{ route("home.index") }}">Alpha Team</a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1">
        {{-- <li><a>Link</a></li> --}}
        <li>
          <details>
            <summary>
              Actions
            </summary>
            <ul class="p-2 bg-base-100" style="right: 0.1vw;" data-theme="halloween" >
              <li><a href="{{ route("employee.create") }}">Add Employee</a></li>
              <li><a href="">Removed Employees</a></li>
            </ul>
          </details>
        </li>
      </ul>
    </div>
  </div>
@endsection
@section('content')
<div>
    List of employees removed
    <h2>Details:</h2>
    <div style="display: flex;justify-content: space-evenly; flex-wrap: wrap">
        @if (count($employees) > 0)
            @foreach ($employees as $employee)
                <div style="background-color: teal;border-radius: 10px;margin: 10px; padding: 15px">
                    <h3>Employee {{$loop->index + 1}}</h3>
                    {{-- <ul> --}}
                        <li>First Name: {{$employee['f_name']}}</li>
                        <li>Last Name: {{$employee['l_name']}}</li>
                        <li>Email: {{$employee['email']}}</li>
                        <li>Phone Number: {{$employee['phone_no']}}</li>
                        <li>department: {{$employee['department']}}</li>
                        <li>salary: {{$employee['salary']}}</li>
                        <li>Created at: {{$employee['created_at']}}</li>
                        <li>Modified at: {{$employee['updated_at']}}</li>

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