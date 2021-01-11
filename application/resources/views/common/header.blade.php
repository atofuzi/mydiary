    <nav class="header">
        <h1 class="header-title"><a href="{{ url('/home') }}">My Diary</a></h1>
        <ul class="header-nav">
            <li class="header-nav-item">
                <a class="nav-menu-link" href="{{ url('/home') }}">home</a>
            </li>
            <li class="header-nav-item">
                <a class="nav-item-link" href="{{ url('/write') }}">write</a>
            </li>
            <li class="header-nav-item">
                <a class="nav-item-link" href="{{ url('/record') }}">record</a>
            </li>
            <li class="header-nav-item">
                <a class="nav-item-link" href="#">setting</a>
            </li>
        </ul>
        <div class="header-nav-item header-nav-right-item">
            <!-- Authentication -->
            <form class="logout" method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-menu-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">logout</a>
            </form>
        </div>
    </nav>