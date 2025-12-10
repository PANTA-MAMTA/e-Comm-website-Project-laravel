@extends('master')
@section('content')

<div class="custom-product">
     <div class="col-sm-6">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>{{ $total }} Rupees</td>
                </tr>

                <tr>
                    <td>Tax</td>
                    <td>0 Rupees</td>
                </tr>

                <tr>
                    <td>Delivery</td>
                    <td>100</td>
                </tr>

                <tr>
                    <td>Total Amount</td>
                    <td>{{ $total + 100 }}</td>
                </tr>
            </tbody>
        </table>
        
    </div>
</div>
@endsection