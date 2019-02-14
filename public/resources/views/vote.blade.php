@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if($errors->has('vote.review') )
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <li> {{$error}}</li>
                        @endforeach
                </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">Vote</div>
                    <div class="panel-body">

                        <form method="POST" action="{{ route('vote') }}">
                            {{ csrf_field() }}
                            <table width="100%">

                                <td> <input type="hidden" name="vote[id]" value={{ $_GET['presentation']}}> </td>
                                <td>
                                    <input class="hidden" type="radio" name="vote[review]" value="awesome" id="awesome"/>
                                    <label for="awesome"> <img class="responsive" src="/images/awesomepic.png" alt=""
                                                            id="awesomepic" onclick="change_image('awesomepic')"> </label>
                                </td>

                                <td>
                                     <input class="hidden" type="radio" name="vote[review]" value="good" id="good"/>
                                    <label for="good"> <img class="responsive" src="/images/goodpic.png" alt=""
                                                         id="goodpic" onclick="change_image('goodpic')"/> </label>
                                </td>

                                <td>
                                    <input class="hidden" type="radio" name="vote[review]" value="average" id="average"/>
                                    <label for="average"> <img class="responsive" src="/images/averagepic.png" alt=""
                                                           id="averagepic" onclick="change_image('averagepic')"/> </label>
                                </td>

                                <td>
                                    <input class="hidden" type="radio" name="vote[review]" value="bad" id="bad"/>
                                    <label for="bad"> <img class="responsive" src="/images/badpic.png" alt=""
                                                           id="badpic" onclick="change_image('badpic')"> </label>
                                </td>

                                <td>
                                    <input class="hidden" type="radio" name="vote[review]" value="horrible" id="horrible"/>
                                    <label for="horrible"> <img class="responsive" src="/images/horriblepic.png" alt=""
                                                                id="horriblepic" onclick="change_image('horriblepic')"/> </label>
                                </td>

                            </table>

                            <div class="form-group{{ $errors->has('review') ? ' has-error' : '' }}">
                                <label for="review" class="col-md-4 control-label">review</label>

                                <textarea id="review" type="text" class="form-control" name="vote[review_text]" autofocus>
                                </textarea>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Vote
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function change_image(id){
            var arraypic=['awesomepic','goodpic','averagepic', 'badpic', 'horriblepic'];
            for (var i=0; i<arraypic.length; i++) {
                document.getElementById(arraypic[i]).src='/images/'+arraypic[i]+'.png';
            }
            document.getElementById(id).src='/images/'+id+'_chosen.png';
        }

    </script>
@endsection
