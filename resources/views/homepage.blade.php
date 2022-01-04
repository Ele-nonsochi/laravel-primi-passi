<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    <div class="text-position">
        <div class="content">
            <div class="title">
                Get your album
            </div>
            <div class="links">
                <a href="{{ route('listalbum') }}">List Album</a>
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
        .links>a {
            text-decoration: none;
            color: rgba(174, 104, 217);
            padding: 0 25px;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
        }
        .links>a:hover {
            color:rgba(79, 22, 115);
        }
        
    </style>

</html>