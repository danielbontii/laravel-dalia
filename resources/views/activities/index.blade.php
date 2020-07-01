@extends('layouts.app')

@section('content')
<h3 class="display-3 text-center mb-3">Activities</h3>
<div class="w-100 d-flex justify-content-end mb-4 pr-5">
    <a href="{{ route('activities.create') }}" class="btn btn-success">Add new activity</a>
</div>
<div class="row d-flex justify-content-center w-100">
    <div class="col-md-10">
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Creator</th>
                  <th scope="col">Create date</th>
                  <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($activities as $activity)
            <tr>
                <th scope="row">{{ $activity->title }}</th>
                <td>{{ $activity->creator->name }}</td>
                <td>{{ $activity->created_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('activities.show', ['activity' => $activity->id]) }}" class="btn btn-primary" >Details</a>

                    @if (Auth::user()->role === 'admin')
                        <a href="{{ route('activities.edit', ['activity' => $activity->id]) }}" class="btn btn-secondary" >Update status</a>
                    @endif
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $activities->links() }}
    </div>
</div>

@endsection
