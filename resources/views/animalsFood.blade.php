@extends('layout')

@section('title', 'List of animals food')

@section('content')
    <div class="container">
        <h1>List of Animals Food</h1>
        <ul>
            @foreach($food as $item)
                <li>{{ $item->name }} - {{ $item->species }}</li>
            @endforeach
        </ul>
    </div>
@endsection
