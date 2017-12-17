<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="top-right links">
        <a href="{{ url('/news') }}">Все новости</a>
    </div>

    <div class="content" style="max-width: 1000px; margin: auto">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{ $page->name }}</h1>
                <div>
                    {{ $page->body }}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
