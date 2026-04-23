<x-app-layout>
    <h1>If you have a suggestion, please contact us!</h1>

    <form action="{{ route('contacts.store') }}" method="post">
        @csrf
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">E-mail: </label>
        <input type="text" id="email" name="email">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content"></textarea>
        <br>
        <input type="submit" value="Send">
    </form>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</x-app-layout>