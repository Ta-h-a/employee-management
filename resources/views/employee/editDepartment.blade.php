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
    <form method="POST" action="{{ route("employee.updateDepartment", ['employee' => $employee->id ] ) }}">
        @csrf
        @method('PUT')
        <div>
            <h2>Current Department : {{ $employee->department }}</h2>
            <label for="department">Department :</label>
            <input type="text" name="department" value="{{old('department')}}">
            @error('department')
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