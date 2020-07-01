@extends('layouts.app')

@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-md-10">
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Position</th>
                  <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->name }}</th>
                <td>{{ $user->email }}</td>
                <td>{{ $user->position }}</td>
                <td>
                    <a href="{{ route('profiles.show', ['user' => $user->id]) }}" class="btn btn-link" >Edit</a>
                    <a class="btn btn-link">Make admin</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>

@endsection
