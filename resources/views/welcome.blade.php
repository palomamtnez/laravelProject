@extends('layout')


@section('content')
    <h1>MY {{$foo}} EXTENDSSSS</h1>

    <ul>
        <?php foreach($tasks as $task): ?>
                    <li><?= $task ?></li>

        <?php endforeach; ?>

        <br>
        @foreach($tasks as $task)
                    <li>{{ $task }}</li>

        @endforeach
    </ul>
@endsection