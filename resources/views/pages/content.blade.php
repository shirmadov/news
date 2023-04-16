@extends('layouts.app')
@section('content')
    <div class="intro">
        <div class="container">
                <div class="newst__block">
                        <div class="newst__block__title">{{$content->title}}</div>
                        <div class="newst__block__text">
                            {{$content->text}}
                        </div>
                </div>
        </div>
    </div>

@endsection()
