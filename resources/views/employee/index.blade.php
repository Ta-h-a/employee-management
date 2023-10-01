@extends('layout')
@extends('employee.navbar')
@section('content')
<div>
    <div class="container mx-auto place-content-center mb-10">
        <h1 class="text-center text-5xl my-20 font-bold tracking-wide">
            Working Employees
        </h1>
    </div>
    <div>
        <div class="container mx-auto py-2 mb-10" style="height: 65vh">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-10 px-4">
            @if (count($employees) > 0)
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
            @else
            No employees found
            @endif
        </div>
    </div>
    </div>
</div>
@endsection