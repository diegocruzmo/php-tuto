@extends('layouts.landing')

@section('title', 'Services')

@section('content')
    <div class="cards">
        @component('_components.card')
        @slot('title', 'Service 1')
        @slot('content', 'lorem ipsum dolor set aimet.')
    @endcomponent
    </div>
@endsection

@section('styles')

@endsection
