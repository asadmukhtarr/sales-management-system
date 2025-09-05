@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header">
            <i class="fa fa-cubes text-primary"></i> All Products
        </div>
        <div>
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th><i class="fa fa-image"></i> Image</th>
                        <th><i class="fa fa-tag"></i> Title</th>
                        <th><i class="fa fa-align-left"></i> Description</th>
                        <th><i class="fa fa-usd"></i> Price</th>
                        <th><i class="fa fa-cogs"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Product 1 -->
                    <tr>
                        <td><img src="https://via.placeholder.com/80" class="img-thumbnail" alt="Product"></td>
                        <td>Sample Product 1</td>
                        <td>Short description of product 1</td>
                        <td>$20.00</td>
                        <td>
                            <button class="btn btn-sm btn-info m-1"><i class="fa fa-pencil"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                                    <tr>
                        <td><img src="https://via.placeholder.com/80" class="img-thumbnail" alt="Product"></td>
                        <td>Sample Product 1</td>
                        <td>Short description of product 1</td>
                        <td>$20.00</td>
                        <td>
                            <button class="btn btn-sm btn-info m-1"><i class="fa fa-pencil"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                                    <tr>
                        <td><img src="https://via.placeholder.com/80" class="img-thumbnail" alt="Product"></td>
                        <td>Sample Product 1</td>
                        <td>Short description of product 1</td>
                        <td>$20.00</td>
                        <td>
                            <button class="btn btn-sm btn-info m-1"><i class="fa fa-pencil"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                                    <tr>
                        <td><img src="https://via.placeholder.com/80" class="img-thumbnail" alt="Product"></td>
                        <td>Sample Product 1</td>
                        <td>Short description of product 1</td>
                        <td>$20.00</td>
                        <td>
                            <button class="btn btn-sm btn-info m-1"><i class="fa fa-pencil"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
