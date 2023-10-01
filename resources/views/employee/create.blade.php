@extends("layout")
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
@section("content")

<div class="container mx-auto place-content-center px-10">

    <form action="{{route('employee.store')}}" method="POST">
        @csrf
        <div class="form-control w-full my-5">
            <label for="f_name" class="label">
                <span class="label-text">First Name: </span>
              </label>
            <input  type="text" placeholder="First Name" class="input rounded-lg input-bordered input-primary w-full max-w-xl" name="f_name" value="{{old('f_name')}}">
            @error('f_name')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="l_name" class="label"><span class="label-text">Last Name :</span></label>
            <input type="text" placeholder="Last Name" class="input rounded-lg input-bordered input-primary w-full max-w-xl" name="l_name" value="{{old('l_name')}}">
            @error('l_name')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="email" class="label"><span class="label-text">Email :</span></label>
            <input type="email" placeholder="Email" class="input rounded-lg input-bordered input-primary w-full max-w-xl" name="email" value="{{old('email')}}">
            @error('email')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="phone_no" class="label"><span class="label-text">Phone No :</span></label>
            <input type="number" placeholder="Phone No" class="input rounded-lg input-bordered input-primary w-full max-w-xl" name="phone_no" value="{{old('phone_no')}}">
            @error('phone_no')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="department" class="label"><span class="label-text">Department :</span></label>
            <input type="text" placeholder="Department" class="input rounded-lg input-bordered input-primary w-full max-w-xl" name="department" value="{{old('department')}}">
            @error('department')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-control w-full my-5">
            <label for="salary" class="label"><span class="label-text">Salary :</span></label>
            <input type="number" placeholder="salary" class="input rounded-lg input-bordered input-primary w-full max-w-xl" name="salary" value="{{old('salary')}}">
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