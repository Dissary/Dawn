@if(Auth::check())
    @if(Auth::user()->user_role == "admin" || Auth::user()->user_role == "curator")
        <!-- Navigationsleiste -->
        <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar2"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <div class="collapse navbar-collapse" id="defaultNavbar2">
                        <ul class="nav navbar-nav">
                            <li><a href="/anime/create">Hinzufügen</a></li>
                            <li><a href="/curator/season">Season</a></li>
                            <li><a href="/curator/blog">Blogbeiträge</a></li>
                            <li><a href="/curator/events">Events</a></li>
                        </ul>
                        @if(Auth::user()->user_role == "admin")
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="/admin/users">Nutzer</a></li>
                                        <li><a href="/admin/dashboard">Dashboard</a></li>
                                        <li><a href="/admin/settings">Einstellungen</a></li>
                                    </ul>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    @endif
@endif