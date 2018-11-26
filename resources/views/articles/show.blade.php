@extends('layouts.app')

@section('content')
<div class="pusher">
  <div class="ui green segment">
    <p>{{ $article->name }}</p>
    <div class="ui divider"></div>
    @php
        $parsedown = new Parsedown;
        $parsedown->setSafeMode(true);
        echo $parsedown->text($article->content);
    @endphp
  </div>
</div>
@stop
