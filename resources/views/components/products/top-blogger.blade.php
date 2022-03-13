<div class="tg-widget tg-widgetblogers">
    <div class="tg-widgettitle">
        <h3>Top Bloogers</h3>
    </div>
    <div class="tg-widgetcontent">
        <ul>
            @for ($i = 0; $i < 4; $i++)
            <li>
                <div class="tg-author">
                    <figure><a href="javascript:void(0);"><img src="{{asset('images/author/imag-03.jpg')}}" alt="image description"></a></figure>
                    <div class="tg-authorcontent">
                        <h2><a href="javascript:void(0);">Jude Morphew</a></h2>
                        <span>21,658 Published Books</span>
                    </div>
                </div>
            </li>    
            @endfor
        </ul>
    </div>
</div>