<!doctype html>
<html class="no-js" ">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <title>home</title>
	<meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/normalize.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/transitions.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="{{asset('css/color.css')}}">
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	<script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body class="tg-comingsoonpage">
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        @yield('content')
    </div>
</body>

<script src="{{asset('js/vendor/jquery-library.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.vide.min.js')}}"></script>
<script src="{{asset('js/countdown.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/parallax.js')}}"></script>
<script src="{{asset('js/countTo.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/gmap3.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    function comingsooncounter() {
        var launch = new Date(2018, 06, 14, 11, 15);
        var days = $('#days');
        var hours = $('#hours');
        var minutes = $('#minutes');
        var seconds = $('#seconds');
        setDate();
        function setDate(){
            var now = new Date();
            if( launch < now ){
                days.html('<p>Days</p><h1>0</h1>');
                hours.html('<p>Hours</p><h1>0</h1>');
                minutes.html('<p>Minutes</p><h1>0</h1>');
                seconds.html('<p>Seconds</p><h1>0</h1>');
            }
            else{
                var s = -now.getTimezoneOffset()*60 + (launch.getTime() - now.getTime())/1000;
                var d = Math.floor(s/86400);
                days.html('<h1>'+d+'</h1><p>Day'+(d>1?'s':''),'</p>');
                s -= d*86400;
                var h = Math.floor(s/3600);
                hours.html('<h1>'+h+'</h1><p>Hour'+(h>1?'s':''),'</p>');
                s -= h*3600;
                var m = Math.floor(s/60);
                minutes.html('<h1>'+m+'</h1><p>Minute'+(m>1?'s':''),'</p>');
                s = Math.floor(s-m*60);
                seconds.html('<h1>'+s+'</h1><p>Second'+(s>1?'s':''),'</p>');
                setTimeout(setDate, 1000);
            }
        }
    }
    comingsooncounter();
</script>
</html>
