@extends('layout')

@section('title', 'List of all animals')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col">
                Name
            </div>
            <div class="col">
                Species
            </div>
            <div class="col">
                Age
            </div>
            <div class="col">
                Details
            </div>
            <div class="col">
                Food
            </div>
            <div class="col">
                Employee
            </div>
        </div>
        @foreach($animals as $animal)
            <div class="row">
                <div class="col">
                    {{ $animal->name }}
                </div>
                <div class="col">
                    {{ $animal->species }}
                </div>
                <div class="col">
                    {{ $animal->age }}
                </div>
                <div class="col">
                    <a href="{{ route('animals.data', ['animal' => $animal]) }}">Details</a>
                </div>
                <div class="col">
                    <a href="{{ route('animals.food', ['animalFood' => $animal->food]) }}">Food</a>
                </div>
                <div class="col">
                    <a href="{{ route('animals.employee', ['animalEmployee' => $animal->employee]) }}">Employee</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
