@extends('layouts.app')

@section('content')
<div class="container py-4">
    @include('includes.flash')
    <br />
    <h2 class="mb-4"><i class="fa fa-tags text-primary"></i> Manage Categories</h2>

    <div class="row">
        <!-- Create Category Form -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-3 mb-4">
                <div class="card-body">
                    <h5 class="mb-3"><i class="fa fa-plus-circle text-success"></i> Create New Category</h5>
                    <form action="{{route('categories.store') }}" method="POST">
                        @csrf

                        <!-- Category Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label"><i class="fa fa-tag"></i> Category Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter category title">
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-success w-100">
                            <i class="fa fa-save"></i> Save Category
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- All Categories Table -->
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-3">
                <div>
                    <h5 class="mb-3"><i class="fa fa-list"></i> All Categories</h5>
                    <table class="table table-bordered table-stripped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th><i class="fa fa-tag"></i> Title</th>
                                <th> <i class="fa fa-clock-o"></i> Posted </th>
                                <th><i class="fa fa-cogs"></i> Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Sample Category 1 -->
                            @foreach($category as $categories)
                            <tr>
                                <td>{{ $categories->title }}</td>
                                <td>{{ $categories->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('categories.edit',$categories->id) }}">
                                        <button class="btn btn-sm btn-info m-1"><i class="fa fa-pencil"></i> Edit</button>
                                    </a>
                                    <form action="{{ route('categories.destroy', $categories->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
