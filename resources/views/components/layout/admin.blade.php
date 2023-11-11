@props([
    'title',
    'description'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta property="og:url" content="https://<?=$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']?>">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('storage/image/my_contacts.png') }}">
    <link type="image/x-icon" href="{{ asset('storage/image/favicon.ico') }}" rel="shortcut icon">
    <link type="image/png" sizes="16x16" rel="icon" href="{{ asset('storage/image/favicons/favicon-16x16.png') }}">
    <link type="image/png" sizes="32x32" rel="icon" href="{{ asset('storage/image/favicons/favicon-32x32.png') }}">
    <link type="image/png" sizes="64x64" rel="icon" href="{{ asset('storage/image/favicons/favicon-64x64.png') }}">
    <link type="image/png" sizes="120x120" rel="icon" href="{{ asset('storage/image/favicons/favicon-120x120.png') }}">
    <link type="image/png" sizes="128x128" rel="icon" href="{{ asset('storage/image/favicons/favicon-128x128.png') }}">
    <link type="image/png" sizes="256x256" rel="icon" href="{{ asset('storage/image/favicons/favicon-256x256.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/css/admin.scss'])
</head>
<body>
    <header>
        <div class="container">
            <h2>Admin panel</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </header>
    {{ $slot }}
    <footer>
        <div class="container">
            <h2>Footer</h2>
        </div>
    </footer>
    <!-- @vite(['resources/js/app.js']) -->
</body>
</html>