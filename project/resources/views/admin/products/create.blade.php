@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header">
            <i class="fa fa-plus-circle text-primary"></i> Create New Product
        </div>
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Product Title -->
                <div class="mb-3">
                    <label for="title" class="form-label"><i class="fa fa-tag text-success"></i> Product Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter product title">
                </div>

                <!-- Product Description -->
                <div class="mb-3">
                    <label for="description" class="form-label"><i class="fa fa-align-left text-info"></i> Product Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter product description"></textarea>
                </div>

                <!-- Product Price -->
                <div class="mb-3">
                    <label for="price" class="form-label"><i class="fa fa-usd text-warning"></i> Price ($)</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter product price">
                </div>

                <!-- Product Image -->
                <div class="mb-3">
                    <label for="image" class="form-label"><i class="fa fa-picture-o text-danger"></i> Product Image</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i> Create Product
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
