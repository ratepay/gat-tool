<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presentation;
use App\PresentationRating;
use App\Feedback;
use Illuminate\Support\Facades\Cookie;

class VotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $presentation = Presentation::with('votes', 'feedback')->findOrFail($id);

        return view('votes.index', compact('presentation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $presentation = Presentation::findOrFail($id);

        return view('votes.create', compact('presentation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasVoted = Cookie::get('hasVoted-' . $request->get('presentation_id'));

        if ($hasVoted) {
            return redirect()->back()->withError('You already voted this talk ;)');
        }

        $request->validate([
            'review'=>'required'
        ], [
            'review.required' => 'Please choose a rating.'
        ]);

        $vote = PresentationRating::where([
            'presentation_id' => $request->get('presentation_id')
        ])->first();

        if($vote) {
            $vote->{$request->get('review')} = $vote->{$request->get('review')} + 1;
            $vote->save();
        } else {
            PresentationRating::create([
                'presentation_id' => $request->get('presentation_id'),
                $request->get('review') => 1
            ]);
        }

        if($request->get('feedback') != '') {
            Feedback::create([
                'presentation_id' => $request->get('presentation_id'),
                'review' => $request->get('feedback')
            ]);
        }

        return redirect()->to('/')
                         ->withSuccess('Your vote was stored successfully.')
                         ->cookie('hasVoted-' . $request->get('presentation_id'), 1, 12600);
    }
}
