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
<div>
    <div class="container mx-auto place-content-center">
        <h1 class="text-center text-5xl my-10 font-bold tracking-wide">
            Employees
        </h1>
    </div>
    <div>
        @if (count($employees) > 0)
           <div class="container mx-auto py-2" style="height: 65vh">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-10 px-4">
                @foreach ($employees as $employee)
                <div class="grow card bg-primary text-primary-content card-normal card-box" data-theme="forest">
                    <div class="card-body">
                            <h2 class="card-title text-3xl">
                                {{ ucfirst($employee['f_name']) }}
                                {{ ucfirst($employee['l_name']) }}
                            </h2>
                            
                            <div class="badge badge-outline rounded-lg">
                                {{ $employee['email'] }}
                            </div>

                        <div class="card-actions justify-end">
                            <a href="{{ route("employee.show", ['employee' => $employee['id']] )}}" class="link link-hover">
                                <button class="btn">View Details</button>
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
            </div>
           </div>
        @else
                    No employees found
                </div>
        @endif
    </div>
</div>
@endsection