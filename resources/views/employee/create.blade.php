@extends("layout")

@section("content")
    <form action="{{route('employee.store')}}" method="POST">
        @csrf
        <div>
            <label for="f_name">First Name :</label>
            <input type="text" name="f_name" value="{{old('f_name')}}">
            @error('f_name')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label for="l_name">Last Name :</label>
            <input type="text" name="l_name" value="{{old('l_name')}}">
            @error('l_name')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" value="{{old('email')}}">
            @error('email')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label for="phone_no">Phone Number :</label>
            <input type="text" name="phone_no" value="{{old('phone_no')}}">
            @error('phone_no')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label for="department">Department :</label>
            <input type="text" name="department" value="{{old('department')}}">
            @error('department')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label for="salary">Salary :</label>
            <input type="text" name="salary" value="{{old('salary')}}">
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
@endsection