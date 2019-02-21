<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    /**
     * Display Setup View
     * @return Rresponse
     */
    public function index()
    {
        if (Setting::first()) {
            return redirect('/')->withError('Application already set up!');
        }

        return view('setup.index');
    }

    /**
     * Store a new configuration
     * @param  Request $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $path = $request->logo->store('logo', 'public');

        Setting::create([
            'name' => $request->get('name'),
            'logo' => $path
        ]);

        return redirect('/register');
    }
}
