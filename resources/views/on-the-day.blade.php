@extends('master')

@section('body.classes', 'no-slider-page')

@section('content')

    <div class="container">

        @include('on-the-day.intro')
        @include('on-the-day.locations')
        @include('on-the-day.plan-title')



        @include('on-the-day.timeline-arrive-for-ceremony')
        @include('on-the-day.timeline-the-ceremony')
        @include('on-the-day.timeline-photos')
        @include('on-the-day.timeline-to-the-duke')
        @include('on-the-day.timeline-bbq')
        @include('on-the-day.timeline-evening-guests')
        @include('on-the-day.timeline-evening-food')
        @include('on-the-day.timeline-hometime')

    </div>
@endsection