@extends('layouts.app')

@section('title', 'Show')

@section('content')
    <a href="{{ route('pet.index') }}">Home</a>
    <hr />
    <h2>Name: {{ $pet->name }}</h2>
    <p>Type: {{ $pet->type }}</p>
    <p>Owner: {{ $pet->owner }}</p>
@endsection
