@extends('app')

@section('content')

    <form action="/api/posts" method="POST">

        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="post">Content</label>
            <textarea class="form-control" id="post" rows="8" name="post"></textarea>
        </div>
        <input type="submit" value="Küldés" class="btn btn-outline-info">
    </form>

@endsection
