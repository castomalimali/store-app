@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{asset('/storage/'.$viewData["product"]->getImage())}}" alt="IG" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body"><h5 class="card-title">
                {{$viewData["product"]->getName()}}  (TZS {{$viewData["product"]->getPrice()}} )</h5>
            <p class="card-text">
                <small class="muted">Add to Cart</small>
            </p>
            </div>
        </div>
    </div>
</div>
@endsection
