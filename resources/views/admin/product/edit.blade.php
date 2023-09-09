@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Edit Product
    </div>
    <div class="card-body">
        @if ($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>-{{ $error }}</li>
                @endforeach
            </ul>
        @endif
<form action="{{{route('admin.product.update',['id'=>$viewData['product']->getId()])}}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
    <div class="col">
        <div class="mb-3 row">
            <label class="col-lg-2 colmd-6 col-sm-12 col-form-label">Name:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
                <input type="text" class="form-control" name="name" value="{{$viewData['product']->getName()}}" >
            </div>
        </div>
    </div>
    <div class="col">
        <div class="mb-3 row">
            <div class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price:</div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3 row">
                <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
        </div>
        <div class="col">&nbsp;</div>
    </div>
    <div class="mb-3">
        <label class="form-label"></label>

    </div>

</div>

</form>


    </div>
</div>
@endsection


