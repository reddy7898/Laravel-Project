@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Product Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.index') }}"> Back </a>
            </div>
        </div>
    </div>
<h1>{{$product->name}}</h1>
<h1>{{$product->detail}}</h1>


@endsection