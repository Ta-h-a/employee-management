@extends('layout')
@extends('employee.navbar')
@section('content')

<div class="container mx-auto place-content-center px-10">
    <form method="POST" action="{{ route("employee.updateDepartment", ['employee' => $employee->id ] ) }}">
        @csrf
        @method('PUT')
        <div class="container mx-auto place-content-center">
            <h1 class="text-center text-5xl my-10 mt-20 font-bold tracking-wide">
                Edit Employee
            </h1>
        </div>
            <div class="form-control w-full my-5">
                <label for="department" class="label"><span class="label-text">Department :</span></label>
                <input type="text" placeholder="Department" class="input rounded-lg input-bordered input-primary w-full " name="department" value="{{$employee['department']}}">
                @error('department')
                <div class="form-error">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="my-5">
                <button class="btn btn-active btn-primary rounded-lg" data-theme="forest" type="submit">
                    Submit
                </button>
            </div>
    </form>
</div>

@endsection