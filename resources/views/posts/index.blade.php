<x-app-layout>
    <h1>All posts</h1>
    <a href="{{ route('posts.create') }}">Create post</a>
    <ul>
        @foreach($posts as $post)
        <li class ="PostBox">
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div class="button-row">
                    <a href="{{ route('posts.show', $post->id) }}">Show</a>
                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn-like">
                    </form>
                </div>
        </li>   
        @endforeach
    </ul>
</x-app-layout>
