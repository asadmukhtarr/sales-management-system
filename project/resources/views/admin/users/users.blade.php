@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4"><i class="fa fa-users text-primary"></i> Manage Users</h2>

    <div class="row">
        <!-- Create User Form -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-3 mb-4">
                <div class="card-body">
                    <h5 class="mb-3"><i class="fa fa-user-plus text-success"></i> Create New User</h5>
                    <form action="#" method="POST">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label"><i class="fa fa-user"></i> Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label"><i class="fa fa-envelope"></i> Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label"><i class="fa fa-lock"></i> Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-success w-100">
                            <i class="fa fa-save"></i> Save User
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- All Users Table -->
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-3">
                <div>
                    <h5 class="mb-3"><i class="fa fa-list"></i> All Users</h5>
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th><i class="fa fa-user"></i> Name</th>
                                <th><i class="fa fa-envelope"></i> Email</th>
                                <th><i class="fa fa-briefcase"></i> Role</th>
                                <th><i class="fa fa-cogs"></i> Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Sample User 1 -->
                            <tr>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td>Admin</td>
                                <td>
                                    <button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Edit</button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                </td>
                            </tr>
                            <!-- Sample User 2 -->
                            <tr>
                                <td>Jane Smith</td>
                                <td>jane@example.com</td>
                                <td>Manager</td>
                                <td>
                                    <button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Edit</button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                </td>
                            </tr>
                            <!-- Sample User 3 -->
                            <tr>
                                <td>Michael Lee</td>
                                <td>michael@example.com</td>
                                <td>Customer</td>
                                <td>
                                    <button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Edit</button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                </td>
                            </tr>
                            <!-- Sample User 4 -->
                            <tr>
                                <td>Emily Brown</td>
                                <td>emily@example.com</td>
                                <td>Customer</td>
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
    </div>
</div>
@endsection
