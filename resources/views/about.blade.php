@extends('layouts.app')

@section('content')
    @include('components.products.banner')
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-aboutus">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="tg-aboutusshortcode">
                            <div class="tg-sectionhead">
                                <h2><span>Greetings &amp; Welcome</span>Know More About Us</h2>
                            </div>
                            <div class="tg-description">
                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut
                                    enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat
                                    aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur
                                    cepteur sint occaecat cupidatat.</p>
                            </div>
                            <div class="tg-btns">
                                <a class="tg-btn tg-active" href="javascript:void(0);">Our History</a>
                                <a class="tg-btn" href="javascript:void(0);">Meet Our Team</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <figure>
                            <img src="images/placeholder.jpg" alt="image description">
                            <iframe
                                src="https://www.youtube.com/embed/acwr_Islo9A?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
