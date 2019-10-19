<?php

namespace App\Http\ViewComposers;


use App\Footerinfo;
use Illuminate\View\View;

class FooterInfoComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $footerinfo = Footerinfo::find(1);

        $view->with('footerinfo', $footerinfo);
    }
}