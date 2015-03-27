@extends('layouts.master')    
<h1>Qui a dit ?</h1>
@section('content')
    <div>
       @if(!empty($questions))
       @foreach($questions as $question)
       <p class="lead"><a href="{{url('answer/'.$question->id.'/'.$question->category_id)}}">"{{$question->question}}"</a></p>
       @endforeach
       @else
       <p>Pas de question pour le moment</p>
       @endif
    </div>
    <?php echo $questions->render(); ?>
@stop