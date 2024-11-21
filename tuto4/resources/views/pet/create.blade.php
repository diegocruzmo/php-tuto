@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <a href="{{ route('pet.index') }}">Home</a>
    <hr />
    <form action="{{ route('pet.store') }}" method="POST">
        @csrf
        <label>Name: </label>
        <input type="text" name="name" />
        @error('name')
        <p style="color:red;">{{ $message }}</p>
        @enderror
        <br />

        <label>Type: </label>
        <input type="text" name="type" />
        @error('type')
        <p style="color:red;">{{ $message }}</p>
        @enderror
        <br />

        <label>Owner: </label>
        <input type="text" name="owner" />
        @error('owner')
        <p style="color:red;">{{ $message }}</p>
        @enderror
        <br />

        <input type="submit" value="Save">
    </form>
@endsection
