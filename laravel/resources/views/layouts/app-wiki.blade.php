<!DOCTYPE html>
<html lang="">
<head>

    @include('includes.wiki.head')

</head>
<body class="language-php">
    <div class="sidebar_layout" id="docsScreen">
        <div class="page_contain">
            <div class="contain">

                @include('includes.wiki.sidebar')

                <section class="body_content">

                    @include('includes.wiki.search')

                    <section class="docs_body">
                        <section class="docs_main">
                            <h1>@yield('title')</h1>
                            @yield('content')

                        </section>
                    </section>
                </section>
            </div>
        </div>
    </div>
<footer>
    @include('includes.wiki.footer')
    @yield('pagespecificscripts')
</footer>

</body>
</html>
