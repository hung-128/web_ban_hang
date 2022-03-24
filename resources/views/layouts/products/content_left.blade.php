<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
    <aside id="tg-sidebar" class="tg-sidebar">
        <div class="tg-widget tg-widgetsearch">
            <form class="tg-formtheme tg-formsearch">
                <div class="form-group">
                    <button type="submit"><i class="icon-magnifier"></i></button>
                    <input type="search" name="search" class="form-group" placeholder="Search by title, author, key...">
                </div>
            </form>
        </div>
        <x-products.category-list/>
        <x-products.book-trending/>
        <div class="tg-widget tg-widgetinstagram">
            <div class="tg-widgettitle">
                <h3>Instagram</h3>
            </div>
            <div class="tg-widgetcontent">
                <ul>
                    @for ($i = 0; $i < 9; $i++)
                    <li>
                        <figure>
                            <img src="{{asset('images/instagram/img-01.jpg')}}" alt="image description">
                            <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                        </figure>
                    </li>    
                    @endfor
                </ul>
            </div>
        </div>
        <x-products.top-blogger/>
    </aside>
</div>