@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    <p>Name: {{$user->name}}</p>
                    <p>Lastname: {{$user->lastname}}</p>
                    <p>E-mail: {{$user->email}}</p>
                    <p>Pošta:</p>
                    <p>Vloga:</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="btn btn-default">Edit</div>
        </div>
    </div>
</div>
@endsection
