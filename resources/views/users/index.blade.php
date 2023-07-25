@extends('app')
@section('title')
    User
@endsection

@section('content')
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">

<div class="col-lg-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic Table</h4>
            <p class="card-description">
            Basic table with card
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
                    {{-- <td><label class="badge badge-danger">Pending</label></td> --}}
                </tr>
                @endforeach
                @endif
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection