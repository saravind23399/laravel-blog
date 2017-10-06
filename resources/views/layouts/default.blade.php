<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
  </head>
  <body>
    <ul style="bullet-style: none">
      <li><a href="{{ route('posts.create') }}">New Post</a></li>
      <li><a href="{{ route('posts.index') }}">All Posts</a></li>
      <li><a href="/">Home</a></li>
    </ul>
    @yield('content')
  </body>
</html>
