@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center w-100 row">
    <form class="col-md-6" action="{{ route('activities.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
          <label for="details">Details</label>
          <textarea class="form-control" id="details" name="details" rows="3"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Make activity</button>
    </form>
</div>

@endsection
