<nav class="main-menu d-flex navbar navbar-expand-lg ">
    <div class="container">
        <!-- Button for offcanvas menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas Menu -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-center">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body justify-content-between">
                <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>
{{--                    @auth--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('borrow') }}" class="nav-link">Borrow</a>--}}
{{--                    </li>--}}
{{--                    @endauth--}}
     @auth()
                    <li class="nav-item">
                        <a href="{{ route('wishlist.index') }}" class="nav-link">Wishlist</a>
                    </li>
                    @endauth
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                    </li>

                </ul>

                <!-- Icons for account, wishlist, cart -->
                <div class="d-none d-lg-flex align-items-end">
                    <ul class="d-flex justify-content-end list-unstyled m-0">
                        <li>
                            <a href="{{ route('dashboard') }}" class="mx-3">
                                <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('wishlist.index') }}" class="mx-3">
                                <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
                            </a>
                        </li>

{{--                        <li>--}}
{{--                            <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"--}}
{{--                               aria-controls="offcanvasCart">--}}
{{--                                <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>--}}
{{--                                <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">--}}
{{--                                    03--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
