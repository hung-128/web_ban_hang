<div class="tg-widget tg-widgettrending">
    <div class="tg-widgettitle">
        <h3>Trending Products</h3>
    </div>
    <div class="tg-widgetcontent">
        <ul>
            @for ($i = 0; $i < 4; $i++)
            <li>
                <article class="tg-post">
                    <figure><a href="javascript:void(0);"><img src="{{asset('images/products/img-04.jpg')}}" alt="image description"></a></figure>
                    <div class="tg-postcontent">
                        <div class="tg-posttitle">
                            <h3><a href="javascript:void(0);">Where The Wild Things Are</a></h3>
                        </div>
                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">Kathrine Culbertson</a></span>
                    </div>
                </article>
            </li>    
            @endfor
        </ul>
    </div>
</div>