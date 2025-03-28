<header id="header" class="header position-relative">
    <div class="container-fluid container-xl position-relative">
        <div class="top-row d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-end">
                <img src="{{ asset('assets/img/DesignHive.png') }}" alt="DesignHive Logo" class="sitename">
            </a>

            <div class="d-flex align-items-center">
                <form class="search-form ms-4">
                    <input type="text" placeholder="Search..." class="form-control">
                    <button type="submit" class="btn"><i class="bi bi-search"></i></button>
                </form>
                <a href="{{ url('/login') }}" class="btn ms-4 rounded-pill px-4 py-2" style="background-color: #D8B6A4;">Login</a>
            </div>
        </div>
    </div>

    <div class="nav-wrap">
        <div class="container d-flex justify-content-center position-relative">
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ url('/category') }}" class="{{ Request::is('category') ? 'active' : '' }}">Category</a></li>
                    <li><a href="{{ url('/postdetails') }}" class="{{ Request::is('postdetails') ? 'active' : '' }}">Post Details</a></li>
                    <li><a href="{{ url('/posts') }}" class="{{ Request::is('posts') ? 'active' : '' }}">Posts</a></li>
                    <li><a href="{{ url('/profile') }}" class="{{ Request::is('profile') ? 'active' : '' }}">Profile</a></li>
                    <li><a href="{{ url('/404') }}" class="{{ Request::is('404') ? 'active' : '' }}">404</a></li>
                    <li><a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
</header>
