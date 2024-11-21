@extends('layouts.app')

@section('title')
    Create
@endsection

@section('content')
    <a href="{{ route('note.index') }}">Home</a>
    <form action="{{ route('note.store') }}" method="POST">
        @csrf
        <label>Title: </label>
        <input type="text" name="title" />
        <br />
        @error('title')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label>Description: </label>
        <input type="text" name="description" />
        <br />
        @error('description')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <input type="submit" value="Create">
    </form>
@endsection
