@extends('master')

@section('navigation.after')
    @include('home.slider')
@endsection

@section('content')
    @include('home.wedding')
    @include('partials.countdown')
    @include('home.rsvp')
@endsection