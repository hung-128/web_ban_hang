<!--************************************
     Picked By Author Start
   *************************************-->
   <section class="tg-sectionspace tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-sectionhead">
                    <h2><span>Some Great Books</span>Picked By Authors</h2>
                    <a class="tg-btn" href="javascript:void(0);">View All</a>
                </div>
            </div>
            <div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">
                @for ($i = 0; $i < 7; $i++)
                <div class="item">
                    <x-products.book-item-picked/>
                </div>    
                @endfor
            </div>
        </div>
    </div>
</section>
<!--************************************
     Picked By Author End
   *************************************-->
