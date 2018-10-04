@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Users</h2>
    <br>
    <!-- Table, ki objavi vse uporabnike -->
    <table class="table">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        <!-- Loop, ki gre skozi vse uporabnike in po vsakem naredi nov row -->
        @foreach($users as $user)
            <tr>
                <th>{{$user->name}}</th>
                <th>{{$user->lastname}}</th>
            <th><a href="/user/{{$user->id}}"> {{$user->email}}</a></th>

            </tr> 
        @endforeach
    </table>

</div>
@endsection