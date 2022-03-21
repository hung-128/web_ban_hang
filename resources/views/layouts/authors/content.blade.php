<div class="tg-authorsgrid">
    <div class="container">
        <div class="row">
            <div class="tg-authors">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>Strong Minds Behind Us</span>Most Popular Authors</h2>
                    </div>
                </div>
                @for ($i = 0; $i < 18; $i++)
                <x-authors.author-item/>
                @endfor
            </div>
        </div>
    </div>
</div>
<x-home.testimonials/>
<x-home.picked-author/>