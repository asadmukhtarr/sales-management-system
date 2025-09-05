@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4"><i class="fa fa-line-chart text-primary"></i> Analytics</h2>

    <!-- Analytics Cards -->
    <div class="row g-4 mb-4">
        <!-- Total Sales -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 text-center">
                <div class="card-body">
                    <i class="fa fa-shopping-cart fa-2x text-success mb-2"></i>
                    <h5>Total Sales</h5>
                    <p class="fs-4 fw-bold">125</p>
                </div>
            </div>
        </div>

        <!-- Total Earnings -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 text-center">
                <div class="card-body">
                    <i class="fa fa-usd fa-2x text-warning mb-2"></i>
                    <h5>Total Earnings</h5>
                    <p class="fs-4 fw-bold">$12,350</p>
                </div>
            </div>
        </div>

        <!-- Total Products -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 text-center">
                <div class="card-body">
                    <i class="fa fa-cubes fa-2x text-info mb-2"></i>
                    <h5>Total Products</h5>
                    <p class="fs-4 fw-bold">58</p>
                </div>
            </div>
        </div>

        <!-- Total Users -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 text-center">
                <div class="card-body">
                    <i class="fa fa-users fa-2x text-danger mb-2"></i>
                    <h5>Total Users</h5>
                    <p class="fs-4 fw-bold">240</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body">
            <h5 class="mb-3"><i class="fa fa-bar-chart"></i> Sales Overview</h5>
            <div class="p-4 bg-light text-center rounded">
                <p class="text-muted">[Chart Placeholder]</p>
                <i class="fa fa-area-chart fa-3x text-secondary"></i>
                <p class="mt-2">Chart will go here</p>
            </div>
        </div>
    </div>
</div>
@endsection
