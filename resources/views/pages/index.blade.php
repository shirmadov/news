<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/css/main.css?v={{ Config::get('app.media_files_version') }}">
</head>
<body>

<header class="header" style="">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo__text">
                <div class="header__logo">
                    <a class="newst__logo__link" href="">
                        <img class="newst__logo" src="{{ asset('/logo2.png') }}" alt="Sblog logo">

                    </a>

                </div>
                <div class="header__text">
                    News-tech
                </div>
            </div>

            <nav>
                <a class="nav__link" href="">Our Story</a>
                <a class="nav__link" href="">Write</a>
            </nav>
        </div>
    </div>
</header>

<div class="intro">
    <div class="container">
        @foreach($news as $new)

                <div class="newst__block">
                    <a href="{{route('read',$new->slug)}}" style="text-decoration: none;color: black" href="">
                    <div class="newst__block__title">{{$new->title}}</div>

                    <div class="newst__block__text">
                        {{substr($new->text,0,200)}}
                    </div>
                    </a>
                </div>

        @endforeach

    </div>
</div>

</body>
</html>
