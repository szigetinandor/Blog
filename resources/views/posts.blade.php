@extends('app')

@section('content')
    <div id="posts">
         @foreach($posts as $post)
            @include('post', ['post' => $post])
         @endforeach
    </div>
@endsection

{{--
@section('js')
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "/api/posts"
            }).then(function(data) {
                writeData(data);
            });
        });

        function writeData(data) {
            data.forEach(x => $('#posts').append(createPost(x)));
        }

        function createPost(post) {
            return `@include('post', ['post' => ])`;
        }
    </script>
@endsection
--}}
