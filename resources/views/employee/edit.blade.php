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
    <form method="POST" action="{{ route("employee.update", ['employee' => $employee->id ] ) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="f_name">First Name :</label>
            <input type="text" name="f_name" value="{{$employee->f_name}}">
            @error('f_name')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label for="l_name">Last Name :</label>
            <input type="text" name="l_name" value="{{$employee->l_name}}">
            @error('l_name')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" value="{{$employee->email}}">
            @error('email')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label for="phone_no">Phone Number :</label>
            <input type="text" name="phone_no" value="{{$employee->phone_no}}">
            @error('phone_no')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label for="department">Department :</label>
            <input type="text" name="department" value="{{$employee->department}}">
            @error('department')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label for="salary">Salary :</label>
            <input type="text" name="salary" value="{{$employee->salary}}">
            @error('salary')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <button type="submit">
                Submit
            </button>
        </div>
    </form>
</div>

@endsection