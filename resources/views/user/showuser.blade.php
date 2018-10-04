@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User information</div>

                <div class="card-body">
                    <p>Name: {{$user->name}}</p>
                    <p>Lastname: {{$user->lastname}}</p>
                    <p>E-mail: {{$user->email}}</p>
                    <p>Pošta:</p>
                    <p>Vloga:</p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<a href="/user/{{$user->id}}/edit" class="btn btn-default">Edit</div>
@endsection