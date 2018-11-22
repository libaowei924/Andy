@extends('layouts.app')

@section('content')
  <div class="pusher">
    <div class="ui divided items">
        @foreach($articles as $article)
            <div class="item">
                <div class="image">
                  <img src="{{ $article->image }}">
                </div>
                <div class="content">
                  <a class="header">{{ $article->name }}</a>
                  <div class="meta">
                    <span class="cinema">{{ $article->content }}</span>
                  </div>
                  <div class="description">
                    <p></p>
                  </div>
                  <div class="extra">
                    <div class="ui label">其他</div>
                  </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>
@stop
