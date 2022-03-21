<!--************************************
            New Release Start
    *************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-newrelease">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="tg-sectionhead">
                            <h2><span>Taste The New Spice</span>New Release Books</h2>
                        </div>
                        <div class="tg-description">
                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.</p>
                        </div>
                        <div class="tg-btns">
                            <a class="tg-btn tg-active" href="javascript:void(0);">View All</a>
                            <a class="tg-btn" href="javascript:void(0);">Read More</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="tg-newreleasebooks">
                                @for ($i = 0; $i < 3; $i++)
                                 <div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
                                    <x-products.book-item/>
                                </div>    
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            New Release End
    *************************************-->