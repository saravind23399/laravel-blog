@extends('layouts.default')

@section('content')
  <h1>List of posts...</h1>
  <ul>
      @foreach($posts as $post)
          <li>
            {{ $post->title }}
            <a href="{{ route('posts.show', [$post->id]) }}">Show Post {{ $post->title }}</a>
          </li>
      @endforeach
  </ul>
@endsection
