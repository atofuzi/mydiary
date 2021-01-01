    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">My Diary</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/write') }}">write</a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link" href="#">record</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">setting</a>
                </li>
            </ul>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">logout</a>
            </form>
        </div>
    </nav>