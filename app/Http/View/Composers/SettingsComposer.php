<?php

namespace App\Http\View\Composers;

use App\Repositories\UserRepository;
use App\Setting;
use Illuminate\View\View;

class SettingsComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $settings = Setting::first();

        if ($settings) {
            $view->with('logo', 'storage/' . $settings->logo);
            $view->with('name', $settings->name);
        } else {
            $view->with('logo', 'images/RatePAY.svg');
            $view->with('name', 'Give & Take Installer');
        }
    }
}