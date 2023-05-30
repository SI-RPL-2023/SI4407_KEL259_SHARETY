<?php

namespace App\View\Components\Frontend;

use App\Models\Setting;
use App\Models\Socmed;
use Illuminate\View\Component;

class Footer extends Component
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
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $setting = Setting::first();
        $socmeds = Socmed::get();
        $link = 'https://wa.me/' . $setting->phone;
        return view('components.frontend.footer',compact('socmeds','setting','link'));
    }
}
