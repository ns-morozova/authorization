@extends('layouts.app')

@section('content')
    <h1>Добавить студента в: {{ $group->title }}</h1>
    <form method="POST" action="{{ route('students.store', $group) }}">
        @csrf
        <label for="surname">Фамилия</label>
        <input type="text" name="surname" id="surname" required>
        <label for="name">Имя</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Добавить студента</button>
    </form>
@endsection