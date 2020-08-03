@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="jumbotron text-center">
            <h1 class="display-3">Thank you!</h1>
            <p class="lead"><strong>Your order has been processed successfully</strong></p>
            <hr>
            <p>
                Are you having a problem?<a href="#">Contact us</a>
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}" role="button">Continue to the store</a>
            </p>
        </div>
    </div>
@endsection
