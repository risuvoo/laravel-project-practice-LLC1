@extends('layouts.frontend')
@section('content')
    @include('frontend.partials._jumbotron')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        <div class="card-body">
                            <p class="card-text"> {{ $product->name }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">ADD TO CART</button>
                                </div>
                                <small class="text-muted">BDT {{ number_format($product->price,2) }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
