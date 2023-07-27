@extends('layouts.app')

@section('title')
Create User
@endsection

@section('content')
<div class="container">
    <h1 class="heading">Tambahkan User</h1>
    <form action="{{ route('user.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection