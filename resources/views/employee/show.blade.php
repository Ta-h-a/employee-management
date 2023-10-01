@extends('layout')
@extends('employee.navbar')
@section('content')

<div class="container mx-auto my-auto">
    <div class="container mx-auto place-content-center">
        <h1 class="text-center text-5xl my-10 mt-20 font-bold tracking-wide">
            Details
        </h1>
    </div>
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

            <div tabindex="0" class="collapse collapse-arrow border mb-8 border-base-300 bg-base-100">
                <div class="collapse-title text-xl font-medium">
                  Salary
                </div>
                <div class="collapse-content"> 
                  <p>{{ $employee['salary'] }}</p>
                </div>
            </div>

            <form class="inline-block mb-3 mr-3" action="{{ route("employee.edit", $employee['id']) }}" method="GET">
              @csrf
              <button class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none btn btn-outline btn-success" type="submit">Update</button>
            </form>


            <form class="inline-block mr-3 mb-3" action="{{ route("employee.indexUpdateDepartment", $employee['id']) }}" method="GET">
              @csrf
              <button class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none btn btn-outline btn-error" type="submit">Update Department</button>
          </form>
            
            {{-- Modal --}}
            <div class="inline-block mr-3 mb-3">
                <!-- The button to open modal -->
                <label data-theme="night" for="my_modal_6" class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none btn btn-neutral">Remove</label>
    
                <!-- Put this part before </body> tag -->
                <input type="checkbox" id="my_modal_6" class="modal-toggle" />
                <div class="modal" data-theme="halloween">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Are you sure you want to remove this employee ?</h3>
                        <p class="py-4">This action cannot be undone!</p>
                        <div class="modal-action">
                            <form action="{{ route("employee.destroy", ['employee'=> $employee['id'] ]) }}" method="POST">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button class=" btn btn-active btn-error mr-3" type="submit">Delete</button>
                                <label for="my_modal_6" class="btn">Close!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    
            
        </div>
    </div>
</div>

@endsection