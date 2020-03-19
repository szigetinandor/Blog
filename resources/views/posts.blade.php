@extends('app')

@section('content')
    <div id="posts">
    </div>
@endsection

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
            return `<h1>${post.title}</h1><p>${post.post}</p><p>${post.author}</p>`;
        }
    </script>
@endsection
