<!DOCTYPE html>
<html>

<head>
    <title>This is ADMIN</title>
</head>

<body>
    <h1>Hello, {{ $name }}</h1>

    @if($showMessage)
    <p>This is a message.</p>
    @endif

    <ul>
        @foreach($items as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>

</html>