<!DOCTYPE html>
<html>
<head>
    <title>RIIZE</title>
</head>
<body>
    <h1><a href="https://www.youtube.com/watch?v=iUw3LPM7OBU">GET A GUITAR NOW!</a></h1>
    Save the date: {{ $nama }}

    <p>Title track</p>
    @foreach ($lagu as $i)
        <li>{{ $i }}</li>
    @endforeach
</body>
</html>
