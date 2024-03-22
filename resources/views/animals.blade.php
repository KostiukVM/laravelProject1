@extends('layout')

@section('title', 'List of all animals')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col">
                Name
            </div>
            <div class="col">
                specie
            </div>
            <div class="col">
                age
            </div>
        </div>
        @foreach($animalList as $animal)
            <div class="row">
                <div class="col">
                    {{$animal->name}}
                </div>
                <div class="col">
                    {{$animal->specie}}
                </div>
                <div class="col">
                    {{$animal->age}}
                </div>
                <div class="col">
                    <a href="/{{route('animals.data', ['animal' =>$animal])}}">Id</a>
                </div>
                <div class="col">
                    <a href="/{{route('animals.food', ['animalsFood' =>$food])}}">Food</a>
                </div>
                <div class="col">
                    <a href="/{{route('animals.employee', ['animalsEmployee' =>$employee])}}">Employee</a>
                </div>
            </div>

        @endforeach
    </div>
@endsection
