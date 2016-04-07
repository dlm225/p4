<!doctype html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{-- Yield the title if it exists, otherwise default to 'Another CTF' --}}
        @yield('title','Another CTF')
    </title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/superhero/bootstrap.min.css" rel="stylesheet" integrity="sha384-88w0u/oucDSTE30ETLLIobzhT+bQ6CSsiqQyLZpwHvve89eqUA9F2Db6ST6jGRLx" crossorigin="anonymous">
    <link href="/css/custom.css" rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/">
                                    <span class="glyphicon glyphicon-flag" aria-hidden="true"></span> Another CTF
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="/about">About</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">One more separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="/login">Log-In</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <section>
                    {{-- Main page content will be yielded here --}}
                    @yield('content')
                </section>
            </div>
        </div>
    </div>
    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
        <a href="https://github.com/dlm225/p4" class="fa fa-github" target="blank"> View on Github </a>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')
</body>
</html>
