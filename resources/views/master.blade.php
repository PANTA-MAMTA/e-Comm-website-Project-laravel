<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    @include('header')

    @yield('content')

    @include('footer')

</body>

<style>
.custom-login{
    height: 500px;
    padding-top: 100px;
}

.slider-img {
    height: 300px !important;
    width: auto !important;
    margin: 0 auto;
    display: block;
    object-fit: contain;
}

.custom-product{
    min-height: 600px;
    padding-bottom: 50px;
    background-color: #f5f5f5;
    padding: 20px 0;
}

.carousel-caption {
    max-width: 70%;
    margin: 0 auto;
    bottom: 20px;
    padding: 12px 20px;
    background: rgba(0, 0, 0, 0.50);
    border-radius: 6px;
    text-align: center !important;
}

.trending-img{
    height: 100px;
}

.trending-item{
    float: left;
    width: 20%;
}

.trending-wrapper{
    margin:20px;
}

.detail-img{
    height: 200px;
}

.search-box{
    width: 500px !important;
}

.carousel-img {
    max-height: 450px;
    width: auto;
    border-radius: 10px;
    margin-bottom: 15px;
}

.carousel-caption-below {
    color: #333;
    padding: 10px 0;
}

.carousel-caption-below h3 {
    font-weight: bold;
}

.carousel-caption-below p {
    font-size: 1rem;
    color: #666;
}

.cart-list-devider{
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
}
</style>

</html>
