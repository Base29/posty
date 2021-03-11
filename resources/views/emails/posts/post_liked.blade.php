@component('mail::message')
    # Your post has been liked

    {{ $liker->name }} liked your post.

    @component('mail::button', ['url' => route('posts.show', $post)])
        View Post
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
