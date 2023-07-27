@extends('layouts.app')

@section('title', 'Update')

@section('content')
<div class="container">
    <h1 class="heading">Update User</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password Baru</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection