@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header">
            <i class="fa fa-list text-success"></i> All Sales
        </div>
        <div>
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th><i class="fa fa-hashtag"></i> Sale ID</th>
                        <th><i class="fa fa-cubes"></i> Product</th>
                        <th><i class="fa fa-sort-numeric-asc"></i> Quantity</th>
                        <th><i class="fa fa-user"></i> Customer</th>
                        <th><i class="fa fa-calendar"></i> Date</th>
                        <th><i class="fa fa-usd"></i> Total</th>
                        <th><i class="fa fa-cogs"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Sale 1 -->
                    <tr>
                        <td>#001</td>
                        <td>Sample Product 1</td>
                        <td>2</td>
                        <td>John Doe</td>
                        <td>2025-09-05</td>
                        <td>$40.00</td>
                        <td>
                            <button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tr>

                    <!-- Sample Sale 2 -->
                    <tr>
                        <td>#002</td>
                        <td>Sample Product 2</td>
                        <td>1</td>
                        <td>Jane Smith</td>
                        <td>2025-09-04</td>
                        <td>$35.50</td>
                        <td>
                            <button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tr>

                    <!-- Sample Sale 3 -->
                    <tr>
                        <td>#003</td>
                        <td>Sample Product 3</td>
                        <td>5</td>
                        <td>Michael Lee</td>
                        <td>2025-09-03</td>
                        <td>$78.75</td>
                        <td>
                            <button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tr>

                    <!-- Sample Sale 4 -->
                    <tr>
                        <td>#004</td>
                        <td>Sample Product 4</td>
                        <td>3</td>
                        <td>Emily Brown</td>
                        <td>2025-09-02</td>
                        <td>$150.00</td>
                        <td>
                            <button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
