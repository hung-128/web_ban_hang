<!--************************************
     Best Selling Start
   *************************************-->
<section class="tg-sectionspace tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-sectionhead">
                    <h2><span>People’s Choice</span>Bestselling Books</h2>
                    <a class="tg-btn" href="javascript:void(0);">View All</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="tg-bestsellingbooksslider" class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
                    @for ($i = 0; $i < 7; $i++)
                    <div class="item">
                        <x-products.book-item/>
                    </div>    
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
<!--************************************
                                Best Selling End
                        *************************************-->
