
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        *{
            width:100%;
            font-family:Arial, Helvetica, sans-serif;
            text-align: center;
        }
        main{
            width:40%;
        }
        a{
            text-decoration: none;
            color:khaki;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <main>
        <h2 style="margin-bottom:0px;"><a href="{{ $post->slug }}">{{ $post->slug }}</a></h2>
        <sub>#{{ $post->id}}</sub>
        <hr>
        <p>{{ $post->body }}</p>
        <a href="/post">Return</a>
    </main>
    
</body>
</html>