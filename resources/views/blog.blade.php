<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <h1>{{ $blog->title }} </h1>
    <p> {{ $blog->body }} </p>
    <a href="/">go back</a>
</body>

</html>
