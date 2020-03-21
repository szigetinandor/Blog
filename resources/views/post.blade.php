<div class="overlay"></div>
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading mb-4">
                <h2>{{ $post->title }}</h2>
                <h5 class="subheading">{{ $post->post }}</h5>
                <span class="meta">Posted by
              <a href="#">{{ $post->author }}</a>
              on {{ $post->created_at }}</span>
                <p>
                    <a href="/posts/update/{{ $post->id }}">update</a>
                </p>
            </div>
            <hr>
        </div>
    </div>
</div>
