@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Welcome to Your Dashboard</h2>

    <div class="row g-4">
        <!-- Users -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 text-center">
                <div class="card-body">
                    <i class="fa fa-users fa-2x mb-3 text-primary"></i>
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">Manage all registered users.</p>
                </div>
            </div>
        </div>

        <!-- Products -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 text-center">
                <div class="card-body">
                    <i class="fa fa-cubes fa-2x mb-3 text-success"></i>
                    <h5 class="card-title">Products</h5>
                    <p class="card-text">Track and manage your products.</p>
                </div>
            </div>
        </div>

        <!-- Sales -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 text-center">
                <div class="card-body">
                    <i class="fa fa-shopping-cart fa-2x mb-3 text-warning"></i>
                    <h5 class="card-title">Sales</h5>
                    <p class="card-text">View total sales and orders.</p>
                </div>
            </div>
        </div>

        <!-- Current Earnings -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 text-center">
                <div class="card-body">
                    <i class="fa fa-dollar fa-2x mb-3 text-danger"></i>
                    <h5 class="card-title">Current Earnings</h5>
                    <p class="card-text">Check your latest revenue.</p>
                </div>
            </div>
        </div>

        <!-- Categories -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 text-center">
                <div class="card-body">
                    <i class="fa fa-tags fa-2x mb-3 text-info"></i>
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text">Organize products by category.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
