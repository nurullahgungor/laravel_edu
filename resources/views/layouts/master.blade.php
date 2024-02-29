<!DOCTYPE html>
<html>
    <head></head>
    </body>
        <nav>
            <ul>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
            </ul>
        </nav>

        <div>
            @yield('content')
        </div>


        <footer>
            <h2>Footer</h2>
        </footer>
    </body>
</html>
