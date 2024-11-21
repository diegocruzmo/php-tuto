@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <a href="{{ route('note.create') }}">New Note</a>
    <ul>
        @forelse ($notes as $note)
            <li>
                <a href="{{ route('note.show', ['note' => $note->id]) }}">{{ $note->title }}</a> |
                <a href="{{ route('note.edit', ['note' => $note->id]) }}">EDIT</a> |
                <form action="{{ route('note.destroy', ['note' => $note->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </li>
        @empty
            <p>No data</p>
        @endforelse
    </ul>
@endsection
