@extends('layouts.app')

@section('content')
    @include('components.home.best_selling')
    @include('components.home.fearture_item')
    @include('components.home.new_release')
    @include('components.home.collection_count')
    @include('components.home.picked_author')
    @include('components.home.testimonials')
    @include('components.home.call_to_action')
@endsection
