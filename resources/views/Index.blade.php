@extends('layouts.app')
@section('title', 'Products page')
@section('content')
<div class="container my-5 pb-4 shadow">
 
    <div class="bg-primary text-white p-4 rounded-top shadow text-center">
        <h2 class="fw-bold mb-0">
            Product CRUD
        </h2>
    </div>
    <div class="card-header bg-white border-0 p-3 d-flex justify-content-between align-items-center shadow-sm">
        <div>
            <h4 class="fw-bold text-dark mb-0">Product List</h4>
            <p class="text-muted mb-0" style="font-size: 0.85rem;">Query Builder CRUD System</p>
        </div>
            <a href="{{ route('create') }}" class="btn btn-success shadow-sm fw-semibold">+ Add Product</a>
        </div>
        <div class="card-body bg-light p-4">

            <div class="table-responsive shadow rounded-3">

                <table class="table table-hover align-middle text-center mb-0 bg-white">

                    <thead class="table-secondary">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                    @forelse($products as $product)

                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->quantity }}</td>

                            <td>
                                <a href="{{ route('edit',$product->id) }}" 
                                   class="btn btn-warning btn-sm shadow fw-semibold">
                                    Edit
                                </a>

                                <form action="{{ route('destroy',$product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm shadow fw-semibold"
                                    onclick="return confirm('Delete this product?')">
                                        Delete
                                    </button>
                                </form>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="text-muted py-4">
                                No Products Found
                            </td>
                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
@endsection