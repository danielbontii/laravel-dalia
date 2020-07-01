@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center w-100 row">
    <form class="col-md-6" action="{{ route('profiles.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ $user->name }}">
        </div>
        <div class="form-group">
          <label for="details">Details</label>
          <textarea class="form-control" id="details" name="details" rows="3"></textarea>
        </div>
    </form>
</div>

@endsection
