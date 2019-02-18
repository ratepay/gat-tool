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

        $path = $request->logo->store('logo');

        Setting::create([
            'name' => $request->get('name'),
            'logo' => $path
        ]);

        return redirect('/register');
    }
}
