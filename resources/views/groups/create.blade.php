@extends('layouts.app')

@section('content')
    <h1>Create Group</h1>
    <form method="POST" action="{{ route('groups.store') }}">
        @csrf
        <label for="title">Название</label>
        <input type="text" name="title" id="title" required>
        <label for="start_from">Действует с</label>
        <input type="date" name="start_from" id="start_from" required>
        <label for="is_active">Активна</label>
        <input type="checkbox" name="is_active" id="is_active" value="1">
        <button type="submit">Создать</button>
    </form>
@endsection