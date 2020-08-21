@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('user.create')}}" class="btn btn-success">Create New User</a>

        <table class="table table-response">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr> 
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$blogs->title}}</td>
                    <td><a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>     
@endsection