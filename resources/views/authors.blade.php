@extends('layouts.app')

@section('content')
    @include('components.products.banner')    
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">
                    @include('layouts.authors.content')
                </div>
            </div>
        </div>
    </div>
@endsection