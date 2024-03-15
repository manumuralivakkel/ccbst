@extends('layouts.app')

@section('title', 'Company List')

@section('content')
    <div class="card">
        <div class="card-header">Employees List</div>
        <div class="card-body">
            <div class="text-center mb-2">
                <a class="btn btn-success" href="{{ route('employees.add') }}">Add employee</a>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Monthly Salary</th>
                        <th>Job Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->age }}</td>
                            <td>$ {{ $employee->salary }}</td>
                            <td>{{ $employee->type }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>




@endsection
