@extends('layouts.app')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0 rounded-3 p-4 bg-white">
                <div class="mb-4 border-bottom pb-3">
                    <h2 class="fw-bold text-dark m-0">Product CRUD</h2>
                    <p class="text-muted mb-0" style="font-size: 0.9rem;">Query Builder CRUD System</p>
                </div>
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-secondary">Nmae</label>
                        <input type="text" name="name" value="" class="form-control py-2 shadow-sm" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-secondary">Price</label>
                        <input type="number" name="price" value="" class="form-control py-2 shadow-sm" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-secondary">Description</label>
                        <input type="text" name="description" value="" class="form-control py-2 shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold text-secondary">Quantity</label>
                        <input type="number" name="quantity" value="" class="form-control py-2 shadow-sm">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success py-2 fw-bold shadow-lg">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection