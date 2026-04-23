<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css" type="text/css">
    <title>Laravel CRUD</title>
</head>
<body>
    <div class="naviBar">
        <a href="/about">About</a>
        <a href="{{ route('posts.index') }}">Posts</a>
        <a href="{{ route('contacts.create') }}">Contacts</a>
    </div>
    <main>
        @if(session('success'))
    <div id="flash" class="alert alert-success">
        {{ session('success') }}
    </div>

    <script>
        // optional: fade out after 3 seconds
        setTimeout(() => document.getElementById('flash').remove(), 3000);
    </script>
@endif
@if(session('deletion'))
    <div id="flash" class="alert alert-success">
        {{ session('deletion') }}
    </div>

    <script>
        // optional: fade out after 3 seconds
        setTimeout(() => document.getElementById('flash').remove(), 3000);
    </script>
@endif
        {{ $slot }}
    </main>
</body>
</html>