@extends('layouts.layout')

@section('content')
    @include('components.products.banner')    
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">
                    @include('layouts.news.content-right-news')
                    @include('layouts.products.content_left')
                </div>
            </div>
        </div>
    </div>
@endsection