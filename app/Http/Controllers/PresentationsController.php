<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presentation;
use App\Speaker;

class PresentationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentations = Presentation::with('speaker')->orderBy('date', 'desc')->paginate(12);

        return view('presentations.index', compact('presentations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('presentations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required'
        ]);

        $speaker = Speaker::firstOrCreate([
            'first_name' => $request->get('first_name'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
        ]);

        $presentation = Presentation::create([
            'title' => $request->get('title'),
            'speaker_id' => $speaker->id,
            'description' => $request->get('description'),
            'date' => $request->get('date'),
        ]);

        return redirect()->to('/')->withSuccess('Presentation created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentation $presentation)
    {
        $presentation->delete();

        return back()->withSuccess('Presentation was deleted!');
    }
}
