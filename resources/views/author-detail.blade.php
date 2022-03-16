@extends('layouts.app')

@section('content')
    @include('components.products.banner')    
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-authordetail">
                        <figure class="tg-authorimg">
                            <img src="{{asset('images/author/imag-25.jpg')}}" alt="image description">
                        </figure>
                        <div class="tg-authorcontentdetail">
                            <div class="tg-sectionhead">
                                <h2><span>15,686 Published Books</span>Scarlet Hawthorne</h2>
                                <ul class="tg-socialicons">
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                            <div class="tg-description">
                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.</p>
                                <p>Caanon proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnisate natus error sit voluptatem accusantium doloremque totam rem aperiam, eaque ipsa quae abillo inventoe veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
                                <p>Voluptas sit asapernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quistan ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                            <div class="tg-booksfromauthor">
                                <div class="tg-sectionhead">
                                    <h2>Books of Scarlet</h2>
                                </div>
                                <div class="row">
                                    @for ($i = 0; $i < 8; $i++)
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                        <x-products.book-item/>
                                    </div>    
                                    @endfor
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection