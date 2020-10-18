<header class="section-header">
    <section class="header-main position-absolute w-100" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));">
        <div class="container">
            <div class="row align-items-center bg-transparent">
                <div class="col-lg-3">
                    <div class="brand-wrap">
                        <a href="{{ url('/') }}">
                            <img class="logo" src="{{ asset('frontend/images/logo-dark.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form action="#" class="search-wrap">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widgets-wrap d-flex justify-content-center">
                        <div class="widget-header">
                            <a href="{{ route('checkout.cart') }}" class="icontext">
                                <div class="icon-wrap icon-xs bg2 round text-secondary"><i
                                        class="fa fa-shopping-cart"></i></div>
                                <div class="text-wrap text-white">
                                    {{ $cartCount }} items
                                </div>
                            </a>
                        </div>
                        @guest
                            <div class="widget-header">
                                <div class="icon-wrap icon-xs bg2 round text-secondary"><i
                                        class="fa fa-user-plus"></i></div>
                                <div class="btn-group text-wrap">
                                    <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Join us
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="widget-header dropdown-item" style="width: 90%;">
                                            <a href="{{ route('login') }}" class="ml-3 icontext">
                                                <div class="icon-wrap icon-xs bg-primary round text-white"><i class="fa fa-user"></i></div>
                                                <div class="text-wrap text-secondary"><span>Login</span></div>
                                            </a>
                                        </div>
                                        <div class="widget-header dropdown-item" style="width: 90%;">
                                            <a href="{{ route('register') }}" class="ml-3 icontext">
                                                <div class="icon-wrap icon-xs bg-success round text-white"><i class="fa fa-user"></i></div>
                                                <div class="text-wrap text-secondary"><span>Register</span></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->full_name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('account.orders') }}">Orders</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
