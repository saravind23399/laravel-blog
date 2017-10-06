<h1>New Post</h1>
<form action="{{ route('posts.create') }}" method="post">
  <input type="text" name="title" value="">
  <input type="text" name="body" value="">
  <button type="submit" name="submit">Submit</button>
  {!! csrf_field() !!}
</form>
