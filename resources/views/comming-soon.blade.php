@extends('layouts.comming-soon-layout')

@section('content')
    <div class="tg-sectionspace tg-haslayout">
        <div class="tg-comingsoonholder">
            <strong class="tg-logo"><img src="{{ asset('images/logo-02.png') }}" alt="image description"></strong>
            <div class="tg-comingsooncontent">
                <div class="tg-comingsoonhead">
                    <h2>Stay Tuned!</h2>
                    <h3>We’re Launching Very Soon</h3>
                </div>
                <div class="tg-description">
                    <p>Consectetur adipisicing elit eiusmod tempor incididunt labore toloregna aliqua enim minim veniam, quis nostrud exercitation ullamcoiars.</p>
                </div>
                <div id="tg-comming-sooncounter" class="tg-comming-sooncounter">
                    <div class="tg-counterbox">
                        <div id="days" class="timer_box"></div>
                    </div>
                    <div class="tg-counterbox">
                        <div id="hours" class="timer_box"></div>
                    </div>
                    <div class="tg-counterbox">
                        <div id="minutes" class="timer_box"></div>
                    </div>
                    <div class="tg-counterbox">
                        <div id="seconds" class="timer_box"></div>
                    </div>
                </div>
            </div>
            <form class="tg-formtheme tg-formnewsletter">
                <fieldset>
                    <div class="form-group">
                        <label>Signup Newsletter!</label>
                        <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                        <input type="email" name="email" class="form-control" placeholder="Email Here">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
