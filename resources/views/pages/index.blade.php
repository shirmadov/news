

@extends('layouts.app')
@section('content')
    <div class="intro">
        <div class="container">
            @foreach($news as $new)

                <div class="newst__block">
                    <a href="{{route('read',$new->slug)}}" style="text-decoration: none;color: black" href="">
                        <div class="newst__block__title">{{$new->title}}</div>

                        <div class="newst__block__text">
                            {{substr($new->text,0,200)}}
                        </div>
                    </a>
                </div>

            @endforeach

        </div>
    </div>
@stop

