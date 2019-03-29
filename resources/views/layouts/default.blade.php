<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

<header>
        @include('includes.header')
</header>

<main role="main">

    <div id="main" class="row">
        @yield('content')
    </div>


    <footer class="row">
        @include('includes.footer')
    </footer>

</main>

</body>
</html>
