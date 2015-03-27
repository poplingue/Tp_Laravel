@extends('layouts.master')
@section('answer')
    <div class="">
        <span>réponse : </span><h2>{{$question->answer}}</h2>
        <p class="wiki">{{$question->wiki}}</p>
        <p>catégorie : {{$question->category->title}}</p>
    </div>
@stop

