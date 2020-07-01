@extends('layouts.app')

@section('content')

<div class="row d-flex justify-content-center w-100">
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
                    <a href="{{ route('profiles.show', ['user' => $user->id]) }}" class="btn btn-primary" >Details</a>
                    @if (Auth::id() === $user->id)
                    <a href="{{ route('profiles.edit', ['user' => $user->id]) }}" class="btn btn-secondary" >Edit</a>
                    @endif
                    @if (Auth::user()->role === 'admin' &&  $user->role !== 'admin')
                    <a class="btn btn-success">Make admin</a>
                    @endif
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>

@endsection
