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
                    <h5 class="mb-3"><i class="fa fa-plus-circle text-success"></i> Edit Category</h5>
                    <form action="{{route('categories.update',$category->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <!-- Category Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label"><i class="fa fa-tag"></i> Category Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}" placeholder="Enter category title">
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-success w-100">
                            <i class="fa fa-save"></i> Update Category
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
