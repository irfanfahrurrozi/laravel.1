<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts </title>
</head>
<body>
    <h1>All POsts</h1>
     @foreach ($posts as $post)
     <h3> {{$post -> title}}</h3>
     <p> {{$post -> post}}</p>
     @endforeach
</body>
</html>