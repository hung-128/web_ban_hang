@extends('layouts.app')

@section('content')
    @include('components.products.banner')    
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">
                    <x-news.new-detail-img/>
                    @include('layouts.news.content-right-detail')
                    @include('layouts.products.content_left')
                </div>
            </div>
        </div>
    </div>
@endsection