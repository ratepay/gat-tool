@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Presentations</div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">

                                <tr>
                                    <th width="10%">  </th>
                                    <th> Title </th>
                                    <th> Speaker </th>
                                    <th> Date </th>
                                    <th> Description </th>
                                    <th width="10%">  </th>

                                </tr>
                           @foreach($listing as $item)

                               <tr>
                                   <td align="left"> <a class="btn btn-primary" href="/evaluate?presentation={{ $item->id }}">
                                           Vote
                                       </a>
                                   </td>
                                   <td> {{ $item->title}} </td>
                                   <td>  {{ $item->first_name }} {{ $item->name }} </td>
                                   <td>  {{ \Carbon\Carbon::parse($item->date)->format('d.m.Y') }} </td>
                                   <td width="200" style="overflow: hidden;">  {{ $item->description }} </td>
                                   <td align="left"> <a class="btn btn-primary" href="/results?presentation={{ $item->id}}">
                                           Results
                                       </a>
                                   </td>
                               </tr>
                                @endforeach

                            </table>
                        </div>

                        <div class="text-center">
                            {{$listing->appends(['presentation' => Request::get('presentation')])->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

