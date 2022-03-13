<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
    <div id="tg-content" class="tg-content">
        <div class="tg-featurebook alert" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="tg-featureditm">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-sm hidden-xs">
                        <figure><img src="{{asset('images/img-04.png')}}" alt="image description"></figure>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="tg-featureditmcontent">
                            <div class="tg-themetagbox"><span class="tg-themetag">featured</span></div>
                            <div class="tg-booktitle">
                                <h3><a href="javascript:void(0);">Things To Know About Green Flat Design</a></h3>
                            </div>
                            <span class="tg-bookwriter">By: <a href="javascript:void(0);">Farrah Whisenhunt</a></span>
                            <span class="tg-stars"><span></span></span>
                            <div class="tg-priceandbtn">
                                <span class="tg-bookprice">
                                    <ins>$23.18</ins>
                                    <del>$30.20</del>
                                </span>
                                <a class="tg-btn tg-btnstyletwo tg-active" href="javascript:void(0);">
                                    <i class="fa fa-shopping-basket"></i>
                                    <em>Add To Basket</em>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-productdetail">
            <div class="row">
                <x-product_detail.post-book/>
                <x-product_detail.book-content/>
                <x-product_detail.book-description/>
                <x-product_detail.about-author/>
                <x-product_detail.related-products/>
            </div>
        </div>
    </div>
</div>
