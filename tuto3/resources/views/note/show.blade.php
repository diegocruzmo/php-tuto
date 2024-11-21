@extends('layouts.app')

@section('title', 'Show')

@section('content')
    <a href="{{ route('note.index') }}">Home</a>
    <h2>{{ $note->title }}</h2>
    <p>{{ $note->description }}</p>
@endsection
