<x-app-layout>
<div>
    <a href="{{ route('posts.index') }}">All posts</a>
</div>
<div class ="PostViewBox">
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>
    <form action="{{ route('posts.statusUpdate', $post->id) }}" method="post">
        @csrf
        @method('put')
        <label for="status">Status</label>
        <select name="status" id="status">
            <optgroup label="Select this posts status">
                <option value="published">Published</option>
                <option value="draft">Draft</option>
                <option value="archived">Archived</option>
            </optgroup>
        </select>
        <input type="submit" value="Submit">
        <!-- <a href="{{ route('posts.duplicate', $post->id) }}">Duplicate</a> -->
    </form>
    <form action="{{ route('posts.duplicate', $post->id) }}" method = "post">
        @csrf
        <input type="submit" value="Duplicate">
    </form>
</div>
</x-app-layout>
