<nav class="navbar is-dark " role="navigation" aria-label="main navigation">
    <div class="navbar-brand">



        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
            data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="title">
            Sultan Syed Mohammad
        </div>
        <div class="navbar-end">
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    Home
                </a>

                <a class="navbar-item">
                    Gallery
                </a>
                <a class="navbar-item" href="{{url('/blogs')}}">
                    Blog
                </a>
                <a class="navbar-item">
                    Contact
                </a>
                <div class="navbar-item">
                    <div class="buttons">
                        @if(Auth::check())
                        <div class="buttons">
                            <form action="{{route("logout")}}" method="POST">
                                @csrf
                                <input type='submit' class="button is-light" value="Logout" />
                            </form>
                        </div>
                        @else
                        <a class="button is-light" href="{{route('register')}}">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="{{route('login')}}">
                            Log in
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>