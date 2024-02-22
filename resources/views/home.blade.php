<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Laravel Primi Passi</title>
</head>
<body>
    <header>
    <div class=" row ">
        <div>

        </div>
        <nav>
            <ul class="list-unstyled d-flex p-2">
                <li><a class=" m-1 p-2 border border-1 border-black " href="{{ route('home') }}">Home</a></li>
                <li><a class=" m-1 p-2 border border-1 border-black " href="{{ route('works') }}">Our Work</a></li>
                <li><a class=" m-1 p-2 border border-1 border-black " href="{{ route('vision') }}">Our Vision</a></li>
            </ul>
        </nav>
    </div>
    </header>
    <main>
        <h1>
            Hello Laravel !
        </h1>
    </main>
</body>
</html>