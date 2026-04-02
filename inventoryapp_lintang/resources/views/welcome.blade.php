<?php
@extends('layouts.master')

@section('title', 'Welcome')

@section('content')

<div class="container-fluid">

    <div class="card">
        <div class="card-body">

            <h4 class="card-title mb-4">Welcome</h4>

            <h2 class="mb-3">
                Selamat Datang {{ $firstName }} {{ $lastName }}
            </h2>

            <p class="text-muted">
                Terima kasih telah bergabung di SanberBook. Social Media kita bersama!
            </p>

            <a href="/" class="btn btn-primary mt-3">
                Kembali ke Home
            </a>

        </div>
    </div>

</div>

@endsection