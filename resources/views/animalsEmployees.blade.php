
@extends('layout')

@section('title', 'List of Animals Employees')

@section('content')
    <div class="container">
        <h1>List of Animals Employees</h1>
        <ul>
            @foreach($employees as $employee)
                <li>{{ $employee->name }} - {{ $employee->position }}</li>
            @endforeach
        </ul>
    </div>
@endsection
