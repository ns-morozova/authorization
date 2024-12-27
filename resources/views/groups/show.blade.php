@extends('layouts.app')

@section('content')
    <h1>{{ $group->title }}</h1>
    <p>Действует с: {{ $group->start_from }}</p>
    <p>Активна: {{ $group->is_active ? 'Да' : 'Нет' }}</p>
    <a href="{{ route('students.create', $group) }}">Добавить студента</a>
    <h2>Студенты группы</h2>
    <ul>
        @foreach($group->students as $student)
            <li>
                <a href="{{ route('students.show', [$group, $student]) }}">{{ $student->surname }} {{ $student->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection