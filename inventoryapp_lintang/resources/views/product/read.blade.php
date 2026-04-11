@extends('layouts.master')

@section('title', 'List Product')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="/products/create" class="btn btn-sm btn-primary my-3">Tambah</a>

<div class="row">
    @forelse ($products as $item)
        <div class="col-4">
            <div class="card">

                <!-- IMAGE -->
                <img src="{{ asset('storage/'.$item->image) }}" 
                     height="200px" 
                     class="card-img-top">

                <div class="card-body">

                    <!-- NAME -->
                    <h5 class="card-title">{{ $item->name }}</h5>

                    <!-- CATEGORY -->
                    <p class="card-text">
                        Category: {{ $item->category->name }}
                    </p>

                    <!-- PRICE -->
                    <p class="card-text">
                        Harga: Rp {{ $item->price }}
                    </p>

                    <!-- STOCK -->
                    <p class="card-text">
                        Stock: {{ $item->stock }}
                    </p>

                    <div class="d-grid gap-2">

                        <!-- DETAIL -->
                        <a href="/products/{{ $item->id }}" class="btn btn-primary">
                            Read More
                        </a>

                        @if(auth()->user()->role == 'admin')
                            <!-- EDIT -->
                            <a href="/products/{{ $item->id }}/edit" class="btn btn-warning">
                                Edit
                            </a>

                            <!-- DELETE -->
                            <form action="/products/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        @endif

                        <!-- TRANSACTION -->
                        <a href="/transactions/create?product_id={{ $item->id }}" 
                           class="btn btn-success">
                           Transaction
                        </a>

                    </div>

                </div>
            </div>
        </div>

    @empty
        <h4>Product masih kosong</h4>
    @endforelse
</div>

@endsection