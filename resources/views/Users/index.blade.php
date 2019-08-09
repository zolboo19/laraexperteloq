@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users list</div>
                    <a href="{{route('users.create')}}" class="btn btn-sm btn-primary">Add new user</a>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Fullname</th>
                                <th>Email</th>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->surname}}</td>
                                <td>{{$user->full_name}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            @endforeach
                        </table>
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection