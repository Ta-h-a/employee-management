@extends('layout')
@extends('employee.navbar')
@section('content')

<div class="container mx-auto place-content-center px-10">
    <div class="container mx-auto place-content-center">
        <h1 class="text-center text-5xl my-10 mt-20 font-bold tracking-wide">
            Edit Employee
        </h1>
    </div>
    <form method="POST" action="{{ route("employee.update", ['employee' => $employee->id ] ) }}">
        @csrf
        @method('PUT')
        <div class="form-control w-full my-5">
            <label for="f_name" class="label">
                <span class="label-text">First Name: </span>
              </label>
            <input  type="text" placeholder="First Name" class="input rounded-lg input-bordered input-primary w-full " name="f_name" value="{{$employee['f_name']}}">
            @error('f_name')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="l_name" class="label"><span class="label-text">Last Name :</span></label>
            <input type="text" placeholder="Last Name" class="input rounded-lg input-bordered input-primary w-full " name="l_name" value="{{$employee['l_name']}}">
            @error('l_name')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="email" class="label"><span class="label-text">Email :</span></label>
            <input type="email" placeholder="Email" class="input rounded-lg input-bordered input-primary w-full " name="email" value="{{ $employee['email'] }}">
            @error('email')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="phone_no" class="label"><span class="label-text">Phone No :</span></label>
            <input type="number" placeholder="Phone No" class="input rounded-lg input-bordered input-primary w-full " name="phone_no" value="{{$employee['phone_no']}}">
            @error('phone_no')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
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
        <div class="form-control w-full my-5">
            <label for="salary" class="label"><span class="label-text">Salary :</span></label>
            <input type="number" placeholder="salary" class="input rounded-lg input-bordered input-primary w-full " name="salary" value="{{$employee['salary']}}">
            @error('salary')
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

{{-- <div>
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
</div> --}}

@endsection