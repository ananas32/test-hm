<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Новости">
    <meta name="keywords" content="Новости">
    <title>{{ $category->name }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="top-right links">
            <a href="{{ url('/') }}">Home</a>
    </div>

    <div class="content" style="max-width: 1000px; margin: auto">
        @foreach($pages->chunk(2) as $chunk)
            <div class="row">
                @foreach($chunk as $page)
                    <div class="col-sm-6">
                        <a href="{{ $page->url }}">
                            <h3>{{ $page->name }}</h3>
                        </a>
                        <div>
                            {{ $page->body }}
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    <div style="text-align: center">
        {{ $pages->links() }}
    </div>
</div>
</body>
</html>
