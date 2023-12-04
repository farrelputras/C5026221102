<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('JudulHalaman')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <header>
            <h2>Blog Fernandio Farrel</h2>
            <nav>
                <a href="/blog">Home</a>
                <a href="/blog/tentang">TENTANG</a>
                <a href="/blog/kontak">KONTAK</a>
            </nav>
        </header>
        <hr>
        <br>
        @yield('judul')
        <br>
        @yield('konten')
        <br>
        <br>
        <footer>
            <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018-2019</p>
        </footer>
    </div>

</body>

</html>
