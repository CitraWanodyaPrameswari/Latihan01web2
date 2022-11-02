<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    @yield('header')
    @yield('content')
    @yield('footer')
</body>