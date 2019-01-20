<nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="colorlib-logo"><a href="index.html">{{ config('app.name') }}</a></div>
                    </div>
                    <div class="col-md-10 text-right menu-1">
                        <ul>
                            <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </nav>
