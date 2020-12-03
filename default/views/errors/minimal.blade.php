<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            line-height: 1.2;
            margin: 0;
        }

        html {
            color: #3e5569;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 400;
            font-family: 'Nunito Sans', sans-serif;
            display: table;
            height: 100%;
            text-align: center;
            width: 100%;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Nunito Sans', sans-serif;
        }

        body {
            display: table-cell;
            vertical-align: middle;
            margin: 2em auto;
        }

        .logo {
            height: 80px;
            display: inline-block;
            margin-bottom: 30px;
        }

        h1 {
            color: #16365f;
            font-size: 120px;
            font-weight: 900;
            margin-bottom: 10px;
        }

        h4 {
            color: #3e5569;
            font-size: 22px;
        }

        p {
            margin: 0 auto;
            max-width: 790px;
            margin-top: 20px;
            color: #98a6ad !important;
            margin-bottom: 10px;
            font-size: 15px;
            line-height: 20px;
            font-weight: normal;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ef4153;
            color: #fff;
            text-decoration: none;
            font-size: 12px;
            border-radius: 4px;
            margin-top: 20px;
        }

        @media only screen and (max-width: 600px) {
            html {
                display: block;
            }

            body {
                margin: 0;
                padding: 100px 0;
                display: block;
            }

            p {
                width: 100%;
                padding: 0 30px;
            }
        }
    </style>
</head>

<body>
    <img src="{{theme_asset('img/logo/logo.svg')}}" class="logo" alt="">
    <h1>@yield('code')</h1>
    <h4>@yield('message')</h4>
    <p>@yield('description')</p>
    @yield('url')
</body>
