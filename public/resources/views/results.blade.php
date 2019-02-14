@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Results</div>

                    <table width="100%">

                        @if(!empty($results))

                        <tr>
                            <td align="center"> <img class="responsive" src="/images/awesomepic.png" alt=""/> </td>
                            <td align="center"> <img class="responsive" src="/images/goodpic.png" alt=""/> </td>
                            <td align="center"> <img class="responsive" src="/images/averagepic.png" alt=""/> </th>
                            <td align="center"> <img class="responsive" src="/images/badpic.png" alt=""/> </td>
                            <td align="center"> <img class="responsive" src="/images/horriblepic.png" alt=""/> </td>
                        </tr>

                        <tr>
                            <td align="center"> {{ $results->awesome}} </td>
                            <td align="center">  {{ $results->good }} </td>
                            <td align="center">  {{ $results->average }} </td>
                            <td align="center">  {{ $results->bad }} </td>
                            <td align="center">  {{ $results->horrible  }} </td>
                        </tr>
                    </table>

                    <div style="width: 90%; margin-left:5%; margin-top: 10px" >
                            <table class="table">
                                @if(count($results)>=1)
                                <tr>
                                    <th align="center"> Reviews</th>
                                </tr>
                                @foreach($reviews as $item)
                                    <tr>
                                        <td> {{$item->review}} </td>
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                    <td> Es sind noch keine Reviews vorhanden! </td>
                                    </tr>
                                @endif
                            </table>

                        @else
                            Leider ist noch kein Voting vorhaden!
                        @endif
                    </div>

                    <div class="text-center">
                        {{$reviews->appends(['presentation' => Request::get('presentation')])->links()}}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection