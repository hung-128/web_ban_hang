<!--************************************
     Latest News Start
   *************************************-->
   <section class="tg-sectionspace tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-sectionhead">
                    <h2><span>Latest News &amp; Articles</span>What's Hot in The News</h2>
                    <a class="tg-btn" href="javascript:void(0);">View All</a>
                </div>
            </div>
            <div id="tg-postslider" class="tg-postslider tg-blogpost owl-carousel">
                @for ($i = 0; $i < 7; $i++)
                    <x-news.news-item/>  
                @endfor
            </div>
        </div>
    </div>
</section>
<!--************************************
     Latest News End
   *************************************-->
