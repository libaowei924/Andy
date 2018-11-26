@extends('layouts.app')

@section('content')
<div class="pusher">
  <div class="ui green segment" id="article">
    <h1>{{ $article->name }}</h1>
    <div class="ui labeled button like" tabindex="0">
        <div class="ui button"><i class="heart icon"></i> 喜欢 </div>
        <a class="ui basic left pointing label">
            {{ $article->like }}
        </a>
    </div>
    <div class="ui divider"></div>
    @php
        $parsedown = new Parsedown;
        $parsedown->setSafeMode(true);
        echo $parsedown->text($article->content);
    @endphp
  </div>
</div>
@stop
