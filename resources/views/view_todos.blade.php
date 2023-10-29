@extends('layouts.app')

@section('content')
    <h1>Задачи</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (count($todos) > 0)
        @foreach ($todos as $todo)
            <div class="task">
                <h2>{{ $todo['title'] }}</h2>
                <p>{{ $todo['description'] }}</p>
            </div>
        @endforeach
    @else
        <p>Задачи отсутствуют.</p>
    @endif
@endsection
