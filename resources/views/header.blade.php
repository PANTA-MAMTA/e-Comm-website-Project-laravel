<nav class="navbar navbar-default">
    <div class="container-fluid">

        <!-- Brand and toggle for mobile -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#">E-Comm</a>
        </div>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbar-menu">

            <!-- LEFT MENU -->
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">More</a></li>
            </ul>

            <!-- SEARCH FORM CENTER -->
            <form action="/search" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" name="query" class="form-control search-box" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>

            <!-- RIGHT MENU -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Add To Cart</a></li>
            </ul>

        </div>
    </div>
</nav>
