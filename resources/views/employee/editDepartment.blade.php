@extends('layout')

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