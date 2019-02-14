@extends('layouts.app')

@section('content')
<section class="mt-10">
    <div class="container rp-table-votes mx-auto w-full max-w-sm mb-8">
        <table class="table-auto bg-white shadow-md text-center">
            <thead>
                <tr class="uppercase font-bold">
                    <th>
                        <img class="responsive" src="/images/awesomepic.png" alt="Awesome">
                    </th>
                    <th>
                        <img class="responsive" src="/images/goodpic.png" alt="Awesome">
                    </th>
                    <th>
                        <img class="responsive" src="/images/averagepic.png" alt="Awesome">
                    </th>
                    <th>
                        <img class="responsive" src="/images/badpic.png" alt="Awesome">
                    </th>
                    <th>
                        <img class="responsive" src="/images/horriblepic.png" alt="Awesome">
                    </th>
                </tr>
            </thead>
            <tbody>
                @if($presentation->votes)
                    <tr>
                        <td class="bold text-4xl">{{ $presentation->votes->awesome }}</td>
                        <td class="bold text-4xl">{{ $presentation->votes->good }}</td>
                        <td class="bold text-4xl">{{ $presentation->votes->average }}</td>
                        <td class="bold text-4xl">{{ $presentation->votes->bad }}</td>
                        <td class="bold text-4xl">{{ $presentation->votes->horrible }}</td>
                    </tr>
                @else
                    <tr>
                        <td colspan="5">
                            No votes given!
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
        <br />
        <div class="font-bold text-xl mb-2">Feedback <small><a class="text-grey-darkest" href="/">Back to List</a></small></div>
        @foreach($presentation->feedback as $feedback)
            <div class="container mx-auto bg-white shadow-md w-full p-5">
                {!! nl2br($feedback->review) !!}
            </div>
        @endforeach
        <br />
        <a class="text-grey-darkest" href="/">Back to List</a>
    </div>
</section>
@endsection