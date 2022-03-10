<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
    <div id="tg-content" class="tg-content">
        <div class="tg-newslist">
            <div class="tg-sectionhead">
                <h2><span>Latest News &amp; Articles</span>What's Hot in The News</h2>
            </div>
            <div class="row">
                @for ($i = 0; $i < 7; $i++)
                    <x-news.news-item/>
                @endfor
            </div>
        </div>
    </div>
</div>
