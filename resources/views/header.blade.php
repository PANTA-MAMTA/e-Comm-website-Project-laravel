<?php 
use App\Http\Controllers\ProductController;
$total = 0;

if (Session::has('user')) {
    $total = ProductController::cartItem(); 
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand fw-bold" href="/">
            E-Comm
        </a>

        <!-- MOBILE TOGGLE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- NAV CONTENT -->
        <div class="collapse navbar-collapse" id="navbarMenu">

            <!-- LEFT MENU -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myorder">Orders</a>
                </li>
            </ul>

            <!-- SEARCH BAR -->
            <form action="/search" class="d-flex me-3">
                <input class="form-control me-2" type="search" name="query" placeholder="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>

            <!-- RIGHT MENU -->
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="/cartlist">Cart Items ({{ $total }})</a>
                </li>

                @if(Session::has('user'))
                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                            {{ Session::get('user')['name'] }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                @endif
            </ul>
        </div>

    </div>
</nav>
