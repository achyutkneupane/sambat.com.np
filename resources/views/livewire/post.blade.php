<div class="blogSection container">
    <div class="row justify-content-center">
        {{ $posts->links() }}
    </div>
    @foreach ($posts as $post)
        {{ $post->title }}
    @endforeach
    <div class="row justify-content-center">
        {{ $posts->links() }}
    </div>
</div>