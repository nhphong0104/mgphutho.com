<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {!! Theme::header() !!}
</head>

<body>
    {!! Theme::partial('header') !!}
    {!! Theme::content() !!}
    {!! Theme::partial('footer') !!}
    {!! Theme::footer() !!}
</body>

</html>
