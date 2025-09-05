@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header">
            <i class="fa fa-shopping-cart text-success"></i> Create New Sale
        </div>
        <div class="card-body">
            <form action="#" method="POST">
                @csrf

                <!-- Select Product -->
                <div class="mb-3">
                    <label for="product" class="form-label"><i class="fa fa-cubes text-primary"></i> Select Product</label>
                    <select class="form-select" id="product" name="product">
                        <option selected disabled>-- Choose a Product --</option>
                        <option value="1">Sample Product 1</option>
                        <option value="2">Sample Product 2</option>
                        <option value="3">Sample Product 3</option>
                        <option value="4">Sample Product 4</option>
                    </select>
                </div>

                <!-- Quantity -->
                <div class="mb-3">
                    <label for="quantity" class="form-label"><i class="fa fa-sort-numeric-asc text-info"></i> Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity">
                </div>

                <!-- Customer Name -->
                <div class="mb-3">
                    <label for="customer" class="form-label"><i class="fa fa-user text-warning"></i> Customer Name</label>
                    <input type="text" class="form-control" id="customer" name="customer" placeholder="Enter customer name">
                </div>

                <!-- Sale Date -->
                <div class="mb-3">
                    <label for="date" class="form-label"><i class="fa fa-calendar text-danger"></i> Sale Date</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i> Save Sale
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
