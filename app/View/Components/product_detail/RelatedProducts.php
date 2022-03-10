<?php

namespace App\View\Components\product_detail;

use Illuminate\View\Component;

class RelatedProducts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product_detail.related-products');
    }
}
