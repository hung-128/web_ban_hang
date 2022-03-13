@extends('layouts.app')

@section('content')
<main id="tg-main" class="tg-main tg-haslayout">
    @include('components.products.banner')    
    @include('layouts.authors.content')
</main>          
@endsection