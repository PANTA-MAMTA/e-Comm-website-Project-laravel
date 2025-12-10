<?php 
use App\Http\Controllers\ProuductController;
$total=0;
if(Session::has('user'))
{
   $total=ProuductController::cartItem(); 
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
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">More</a>
                </li>
            </ul>

            <!-- SEARCH BAR -->
            <form action='/search' class="d-flex me-3" action="/search">
                <input class="form-control me-2" type="search" name="query" placeholder="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>

           
            <ul class="nav navbar-nav navbar-right">
    <li><a href="/cartlist">Cart Item ({{ $total }})</a></li>

    @if(Session::has('user'))
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                {{ Session::get('user')['name'] }}
                <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
                <li><a href="/logout">Logout</a></li>
            </ul>
        </li>
    @else
        <li><a href="/login">Login</a></li>
    @endif
</ul>
        </div>
    </div>
</nav>
