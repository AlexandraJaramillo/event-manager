<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }}</title>
    <metaname="description" content="{{ $metaDescription ?? 'Default meta description' }}" />
    @vite(['resources/css/app.scss','resources/js/app.js '])
</head>

<body>
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    {{ $slot }}

    <script src="https://kit.fontawesome.com/91cce502f4.js" crossorigin="anonymous"></script>
</body>

</html>