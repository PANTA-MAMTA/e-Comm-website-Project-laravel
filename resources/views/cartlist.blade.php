@extends('master')
@section('content')

<div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>Cart List</h2>
                    <a href="/ordernow">Oder Now</a>
                <div class="row justify-content-center">

                    @foreach($products as $item)
                        <div class="row searched-item cart-list-devider">
                            <div class="col-sm-3">
                                <a href="detail/{{$item['id']}}">
                                
                                <img src="{{ $item['gallery'] }}" 
                                     class="trending-img d-block mx-auto">

                                                            </a>
                            </div>
                            <div class="col-sm-3">
                

                                <div>
                                    <h2>{{ $item['name'] }}</h2>
                                    <h5>{{ $item['description'] }}</h5>
                                </div>

                            </a>
                            </div>
                            <div class="col-sm-3">
                                <a href="/removecart/{{$item->cart_id}}" class="btn btn-waring">Remove From Cart</a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>

    </div>

</div>

@endsection
