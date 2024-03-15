@extends('layouts.app')

@section('title', 'employee List')

@section('content')

<div class="card">

    <div class="card-header">Add Employee</div>

    <div class="card-body w-50">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <form action="{{ route('employees.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"> Name</label>
                <input type="text" class="form-control" id="name" name="name" require>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Age</label>
                <input type="text" class="form-control" id="age" name="age" require>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Job Type</label>
                <select class="form-control" name="type" id="job_type">
                    <option value="">Select</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                    <option value="Contract">Contract</option>
                </select>
            </div>
            <div id="salary">
                <div class="mb-3">
                    <label for="name" class="form-label">Salary</label>
                    <input type="text" class="form-control" name="salary">
                </div>
            </div>
            <div id="salary_parttime">
                <div class="mb-3">
                    <label for="name" class="form-label">Hourly Salary</label>
                    <input type="text" class="form-control" name="hsalary">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Total Hours</label>
                    <input type="text" class="form-control" name="hours" >
                </div>
            </div>

            <button type="submit" class="btn btn-success">Add employee</button>
        </form>
    </div>


</div>

<script>
    $(document).ready(function() {
        $('#salary').hide();
        $('#salary_parttime').hide();
        $('#job_type').change(function() {
            var selectedValue = $(this).val();
            if (selectedValue === 'Full Time' || selectedValue === 'Contract') {
                $('#salary').show();
                $('#salary_parttime').hide();
            } else {
                $('#salary_parttime').show();
                $('#salary').hide();
            }
        });
    });
</script>

@endsection