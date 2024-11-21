@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <a href="{{ route('pet.index') }}">Home</a>
    <hr />
    <form action="{{ route('pet.update', ['pet' => $pet->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Name: </label>
        <input type="text" name="name" value="{{ $pet->name }}" />
        @error('name')
        <p style="color:red;">{{ $message }}</p>
        @enderror
        <br />

        <label>Type: </label>
        <input type="text" name="type" value="{{ $pet->type }}" />
        @error('type')
        <p style="color:red;">{{ $message }}</p>
        @enderror
        <br />

        <label>Owner: </label>
        <input type="text" name="owner" value="{{ $pet->owner }}" />
        @error('owner')
        <p style="color:red;">{{ $message }}</p>
        @enderror
        <br />
        <input type="submit" value="Update">
    </form>
@endsection
