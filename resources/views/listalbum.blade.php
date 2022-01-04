<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get your album</title>
</head>

<body>
    <div class="text-position">
        <div>
            <div class="title">
                Last Album
            </div>
            <div class="card-group">
                @foreach ($album as $prod)
                <div>
                    <h4>Title<br>{{$prod['title']}}</h4>
                    <p>Artist<br>{{$prod['artist']}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
 <!-- Styles -->
    <style>
        body {
             background-color: rgba(223, 242, 223) ;
            color: rgba(174, 104, 217);
            margin: 0;
        }
        .text-position{
            align-items: center;
            display: flex;
            justify-content: center;
            text-align: center;
        }
        .title {
            font-size: 70px;
            margin-bottom: 30px;
            margin-top:20px;
        }
        .card-group {
            display: flex;
            width: 100%;
            text-align: center;
            margin: auto;
            gap: 20px;
        }
    </style>

</html>