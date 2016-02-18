<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <title>@yield('title') - Dawn</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Exo+2:400,500,300' rel='stylesheet' type='text/css'>
    <meta name="description" content="@yield('description')" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    @yield('css')
</head>
<body>
    @include('includes.trackers')
    <!-- Navigationsleiste -->
    <nav class="navbar navbar-default navbar-fixed-top" id="basic-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="/">Dawn</a></div>
            <div class="collapse navbar-collapse" id="defaultNavbar1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Start</a></li>
                    <li><a href="/anime/">Anime</a></li>
                    <li><a href="/recommendations/">Vorschläge</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->pub_username }}<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header">Nutzer</li>
                            <li><a href="/user/dashboard/">Dashboard</a></li>
                            <li><a href="/user/profile/">Mein Profil</a></li>
                            <li><a href="/user/profile/list">Meine Liste</a></li>
                            <li><a href="/user/logout/">Abmelden</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Einstellungen</li>
                            <li><a href="/user/settings/">Nutzereinstellungen</a></li>
                            <li><a href="/user/pagesettings/">Seiteneinstellungen</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Sonstiges</li>
                            <li><a href="/user/refer/">Referral-Programm</a></li>
                        </ul>
                    </li>
                        @else
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nutzer<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/auth/login/">Anmelden</a></li>
                                    <li><a href="/auth/register/">Registrieren</a></li>
                                </ul>
                            </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Inhalt -->
    <div id="page-wrapper">
        <div class="container" id="page-content">
        @yield('content')
        </div>

        <!-- Footer -->
        <hr>
        <div class="container" id="footer-container">
            <div class="row">
                <div class="col-lg-12">
                    <p id="footer-text">Nyanpasu</p>
                    <p>Copyright &copy; 2016 Tim Weiß/Dissary Studios &middot; All Rights Reserved &middot; <a href="https://dissarystudios.net/" >Dissary Studios</a></p>
                    <p id="footer-links"><a href="/about/">Über</a> - <a href="/about/team/">Team</a> - <a href="https://github.com/Dissary/Dawn">GitHub</a> - Running <a href="https://github.com/Dissary/Dawn">Dawn 1.0dev</a></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Skripte -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>