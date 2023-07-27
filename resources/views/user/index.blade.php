@extends('layouts.app')
@section('title')
    User
@endsection

@section('content')
<div class="container">
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">

    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data User</h4>
                <p class="card-description">
                    Detail User
                </p>
                
                <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($users) > 0) 
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email}}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" value="DELETE" class="btn btn-danger">
                            </form>
                            {{-- <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger">Hapus</a> --}}
                        </td>
                    </tr>
                    @endforeach

                    @else 
                    <tr>
                        <td>Data tidak ada</td>
                    </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <a href="{{ route('user.create') }}" class="btn btn-success mt-2 ">Tambah</a>
</div>
@endsection