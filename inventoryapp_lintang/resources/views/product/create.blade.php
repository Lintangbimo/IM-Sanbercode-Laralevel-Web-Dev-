@extends('layouts.master')

@section('title', 'Create Product')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/products" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- NAME -->
    <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
    </div>

    <!-- PRICE -->
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price" class="form-control" value="{{ old('price') }}">
    </div>

    <!-- STOCK -->
    <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="number" name="stock" class="form-control" value="{{ old('stock') }}">
    </div>

    <!-- CATEGORY -->
    <div class="mb-3">
        <label class="form-label">Category</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- IMAGE -->
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection