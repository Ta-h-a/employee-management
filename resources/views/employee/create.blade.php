@extends("layout")
@extends('employee.navbar')
@section("content")

<div class="container mx-auto place-content-center px-10">
    <div class="container mx-auto place-content-center">
        <h1 class="text-center text-5xl my-10 mt-20 font-bold tracking-wide">
            Add Employee
        </h1>
    </div>
    <form action="{{route('employee.store')}}" method="POST">
        @csrf
        <div class="form-control w-full my-5">
            <label for="f_name" class="label">
                <span class="label-text">First Name: </span>
              </label>
            <input  type="text" placeholder="First Name" class="input rounded-lg input-bordered input-primary w-full " name="f_name" value="{{old('f_name')}}">
            @error('f_name')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="l_name" class="label"><span class="label-text">Last Name :</span></label>
            <input type="text" placeholder="Last Name" class="input rounded-lg input-bordered input-primary w-full " name="l_name" value="{{old('l_name')}}">
            @error('l_name')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="email" class="label"><span class="label-text">Email :</span></label>
            <input type="email" placeholder="Email" class="input rounded-lg input-bordered input-primary w-full " name="email" value="{{old('email')}}">
            @error('email')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="phone_no" class="label"><span class="label-text">Phone No :</span></label>
            <input type="number" placeholder="Phone No" class="input rounded-lg input-bordered input-primary w-full " name="phone_no" value="{{old('phone_no')}}">
            @error('phone_no')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="department" class="label"><span class="label-text">Department :</span></label>
            <input type="text" placeholder="Department" class="input rounded-lg input-bordered input-primary w-full " name="department" value="{{old('department')}}">
            @error('department')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="salary" class="label"><span class="label-text">Salary :</span></label>
            <input type="number" placeholder="salary" class="input rounded-lg input-bordered input-primary w-full " name="salary" value="{{old('salary')}}">
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

@endsection