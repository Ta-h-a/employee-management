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
              <li><a href="{{ route("employee.create") }}">Add</a></li>
              <li><a href="">Removed</a></li>
            </ul>
          </details>
        </li>
      </ul>
    </div>
  </div>
@endsection
@section('content')

<div class="container mx-auto my-auto">
    <div class="mockup-browser border bg-base-300 m-5" data-theme="halloween">
        <div class="mockup-browser-toolbar">
            <div class="input">{{ $employee['email'] }}</div>
        </div>
        <div class=" px-4 py-16 bg-base-200" style="list-style-type: none">
            <div tabindex="0" class="collapse collapse-arrow border mb-3 border-base-300 bg-base-100">
                <div class="collapse-title text-xl font-medium">
                  UUID
                </div>
                <div class="collapse-content"> 
                  <p>{{ $employee['id'] }}</p>
                </div>
            </div>

            <div tabindex="0" class="collapse collapse-arrow border mb-3 border-base-300 bg-base-100">
                <div class="collapse-title text-xl font-medium">
                  First Name
                </div>
                <div class="collapse-content"> 
                  <p>{{ $employee['f_name'] }}</p>
                </div>
            </div>

            <div tabindex="0" class="collapse collapse-arrow border mb-3 border-base-300 bg-base-100">
                <div class="collapse-title text-xl font-medium">
                  Last Name
                </div>
                <div class="collapse-content"> 
                  <p>{{ $employee['l_name'] }}</p>
                </div>
            </div>

            <div tabindex="0" class="collapse collapse-arrow border mb-3 border-base-300 bg-base-100">
                <div class="collapse-title text-xl font-medium">
                  Email
                </div>
                <div class="collapse-content"> 
                  <p>{{ $employee['email'] }}</p>
                </div>
            </div>

            <div tabindex="0" class="collapse collapse-arrow border mb-3 border-base-300 bg-base-100">
                <div class="collapse-title text-xl font-medium">
                  Phone Number
                </div>
                <div class="collapse-content"> 
                  <p>{{ $employee['phone_no'] }}</p>
                </div>
            </div>

            <div tabindex="0" class="collapse collapse-arrow border mb-3 border-base-300 bg-base-100">
                <div class="collapse-title text-xl font-medium">
                  Department
                </div>
                <div class="collapse-content"> 
                  <p>{{ $employee['department'] }}</p>
                </div>
            </div>

            <div tabindex="0" class="collapse collapse-arrow border mb-3 border-base-300 bg-base-100">
                <div class="collapse-title text-xl font-medium">
                  Salary
                </div>
                <div class="collapse-content"> 
                  <p>{{ $employee['salary'] }}</p>
                </div>
            </div>
            
            {{-- Modal --}}
            <div>
                <!-- The button to open modal -->
                <label data-theme="night" for="my_modal_6" class="btn btn-error">Remove</label>
    
                <!-- Put this part before </body> tag -->
                <input type="checkbox" id="my_modal_6" class="modal-toggle" />
                <div class="modal" data-theme="night">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Are you sure you want to delete this employee ?</h3>
                        <p class="py-4">This action cannot be undone!</p>
                        <div class="modal-action">
                            <form action="{{ route("employee.destroy", ['employee'=> $employee['id'] ]) }}" method="POST">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button style="background-color: tomato; text-decoration: none; color: black;font-size: 20px" type="submit">Delete</button>
                                <label for="my_modal_6" class="btn">Close!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
            <form action="{{ route("employee.indexUpdateDepartment", $employee['id']) }}" method="GET">
                @csrf
                <button style="background-color: lightgreen; text-decoration: none; color: black;font-size: 20px" type="submit">Update Department</button>
            </form>    
        </div>
    </div>
</div>

@endsection