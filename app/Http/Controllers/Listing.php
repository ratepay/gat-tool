<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class listing extends Controller
{
    public function show()
    {
        $listing = DB::table('presentations')
            ->select('presentations.id','speakers.first_name', 'speakers.name', 'presentations.title',
                    'presentations.description', 'presentations.date')
            ->join('speakers', 'speakers.id', '=', 'presentations.speaker_id')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('listing')->with('listing', $listing);
    }

    public function  add(Request $request)
    {
        $request->validate([
            'presentations.email'=>'required'
        ]);
        $presentations = $request->get('presentations');
        $speaker=[
            'first_name' => $presentations['first_name'],
            'name' => $presentations['name'],
            'email'=> $presentations['email']
        ];

        $existing_speaker= DB::table('speakers')->where($speaker)->first();

        if($existing_speaker){
            $id=$existing_speaker->id;
        } else{
            $id = DB::table('speakers')->insert($speaker);
        }

        DB::table('presentations')->insert([
            [
                'title' => $presentations['title'],
                'speaker_id' => $id,
                'description' => $presentations['description'],
                'date' => $presentations['date']
            ],
        ]);

        return redirect('/presentations');
    }

    public function voting(Request $request)
    {
        $request->validate([
            'vote.review'=>'required'
        ]);

        $voting = $request->get('vote');

        if(!empty($voting['review_text'])) {
            $id = DB::table('feedbacks')->insert([
                [
                    'presentation_id' => $voting['id'],
                    'review' => $voting['review_text']
                ],
            ]);
        };

        $awesome = 0;
        $good = 0;
        $average = 0;
        $bad = 0;
        $horrible = 0;

        switch ($voting['review'])
        {
            case 'awesome':
                $awesome = 1;
                break;
            case 'good':
                $good = 1;
                break;
            case 'average':
                $average = 1;
                break;
            case 'bad':
                $bad = 1;
                break;
            case 'horrible':
                $horrible = 1;
                break;
        }

        $check = DB::table('presentation_ratings')
            ->where('presentation_id', '=', $voting['id'])
            ->first();

        if(!empty($check)){
            DB::table('presentation_ratings')
                ->where('presentation_id', $voting['id'])
                ->update([
                    'awesome' => $check->awesome+$awesome,
                    'good' => $check->good+$good,
                    'average' => $check->average+$average,
                    'bad' => $check->bad+$bad,
                    'horrible' => $check->horrible+$horrible
            ]);
        } else {
            DB::table('presentation_ratings')->insert([
                [
                    'presentation_id' => $voting['id'],
                    'awesome' => $awesome,
                    'good' => $good,
                    'average' => $average,
                    'bad' => $bad,
                    'horrible' => $horrible
                ],
            ]);
        }
        return redirect('/presentations');
    }

    public function results()
    {
        $results = DB::table('presentations')
            ->select('presentations.title','presentations.speaker_id', 'presentations.id',  'speakers.first_name',
                     'speakers.name', 'presentation_ratings.awesome', 'presentation_ratings.good',
                     'presentation_ratings.average', 'presentation_ratings.bad', 'presentation_ratings.horrible')
            ->join('speakers','speakers.id', '=', 'presentations.speaker_id')
            ->join('presentation_ratings', 'presentation_ratings.presentation_id', '=', 'presentations.id')
            ->where('presentations.id', '=', $_GET['presentation'])
            ->first();

        $reviews = DB::table('feedbacks')
            ->select('feedbacks.review')
            ->where('feedbacks.presentation_id','=',$_GET['presentation'])
            ->orderBy('id','desc')
            ->paginate(10);

        return view('results', compact('results', 'reviews'));
    }

    public function evaluate()
    {
        $evaluate = DB::table('presentation_ratings')
            ->select('presentation_ratings.awesome', 'presentation_ratings.good', 'presentation_ratings.average',
                     'presentation_ratings.bad', 'presentation_ratings.horrible', 'feedbacks.review',
                     'feedbacks.presentation_id', 'presentation_ratings.presentation_id', 'presentations.id',
                     'presentations.title')
            ->join('feedbacks','feedbacks.presentation_id', '=', 'presentation_ratings.presentation_id')
            ->join('presentations', 'presentations.id', '=', 'presentation_ratings.presentation_id')
            ->first();

        return view('vote')->with('evaluate', $evaluate);
    }
}

