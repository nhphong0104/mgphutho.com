<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />

    {!! Theme::header() !!}
</head>

<body>
    {!! Theme::partial('header') !!}

    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ Theme::get('pageName') }}</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    {!! Theme::partial('breadcrumbs') !!}
                </div>
            </div>
        </div>
    </div>

    {!! Theme::content() !!}

    {!! Theme::partial('footer') !!}
    {!! Theme::footer() !!}
</body>

</html>
