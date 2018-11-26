@extends('layouts.app')

@section('content')
<div class="pusher">
  <div class="ui green segment">
    <h1>{{ $article->name }}</h1>
    <div class="ui divider"></div>
    @php
        $parsedown = new Parsedown;
        $parsedown->setSafeMode(true);
        echo $parsedown->text($article->content);
    @endphp
  </div>
</div>
@stop
