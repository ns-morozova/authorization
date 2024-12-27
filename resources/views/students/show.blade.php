@extends('layouts.app')

@section('content')
    <h1>{{ $student->surname }} {{ $student->name }}</h1>
    <p>Group: {{ $group->title }}</p>
@endsection