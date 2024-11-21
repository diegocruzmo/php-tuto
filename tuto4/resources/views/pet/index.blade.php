@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <a href="{{ route('pet.create') }}">New Pet</a>
    <ul>
        @forelse ($pets as $pet)
        <li>
            Name: <a href="{{ route('pet.show', ['pet' => $pet->id]) }}">{{ $pet->name }}</a>
            | <a href="{{ route('pet.edit', ['pet' => $pet->id]) }}">Update</a>
            | <form action="{{ route('pet.destroy', ['pet' => $pet->id]) }}" method="POST">
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
