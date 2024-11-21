@extends('layouts.app')

@section('title')
    Create
@endsection

@section('content')
    <a href="{{ route('note.index') }}">Home</a>
    <form action="{{ route('note.update', ['note' => $note->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Title: </label>
        <input type="text" name="title" value="{{ $note->title }}" />
        <br />
        @error('title')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label>Description: </label>
        <input type="text" name="description" value="{{ $note->description }}" />
        <br />
        @error('description')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        <input type="submit" value="Update">
    </form>
@endsection
