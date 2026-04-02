<?php
@extends('layouts.master')

@section('title', 'Register')

@section('content')

<div class="container-fluid">

    <div class="card">
        <div class="card-body">

            <h4 class="card-title mb-4">Register</h4>

            <form action="/welcome" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label><br>
                    <input type="radio" name="gender"> Male <br>
                    <input type="radio" name="gender"> Female <br>
                    <input type="radio" name="gender"> Other
                </div>

                <div class="mb-3">
                    <label class="form-label">Nationality</label>
                    <select class="form-control" name="nationality">
                        <option>Indonesian</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Language Spoken</label><br>
                    <input type="checkbox" name="language"> Bahasa Indonesia <br>
                    <input type="checkbox" name="language"> English <br>
                    <input type="checkbox" name="language"> Other
                </div>

                <div class="mb-3">
                    <label class="form-label">Bio</label>
                    <textarea class="form-control" name="bio"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

            </form>

        </div>
    </div>

</div>

@endsection
