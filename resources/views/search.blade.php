@extends('master')
@section('content')

<div class="custom-product">

    <div class="row">

        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>

        <div class="col-sm-8">
            <div class="trending-wrapper">

                <h4>Result for Products</h4>

                <div class="row">

                    @foreach($products as $item)

                        <div class="col-sm-4 mb-4">
                            <div class="searched-item text-center">

                                <a href="{{ url('detail/'.$item->id) }}">

                                    <img src="{{ $item->gallery }}" 
                                         class="trending-img img-fluid">

                                    <div class="mt-2">
                                        <h2 class="h5">{{ $item->name }}</h2>
                                        <h5 class="text-muted">{{ $item->description }}</h5>
                                    </div>

                                </a>

                            </div>
                        </div>

                    @endforeach

                </div>

            </div>
        </div>

    </div>

</div>

@endsection
