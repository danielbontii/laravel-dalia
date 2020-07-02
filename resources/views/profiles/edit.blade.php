@extends('layouts.app')

@section('content')

<h3 class="display-3 text-center mb-3">Edit profile</h3>


<div class="d-flex justify-content-center w-100 row">
<form class="col-md-6" action="{{ route('profiles.update', ['user' => $user->id]) }}" method="POST">
        @method('PATCH')
        @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
      </div>

      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly>
      </div>

      <div class="form-group">
        <label for="telephone">Telephone</label>
        <input type="tel" class="form-control" id="telephone" name="telephone" value="{{ $user->profile->telephone }}">
      </div>

      <div class="form-group">
        <label for="role">Role</label>
        <select class="form-control" id="role" name="role" readonly>
          <option value="admin" {{ $user->role === 'admin' ? 'selected': ''}}>Admin</option>
          <option value="worker" {{ $user->role === 'worker' ? 'selected': ''}}>Worker</option>
        </select>
      </div>

      <div class="form-group">
        <label for="date-of-birth">Date of birth</label>
        <input type="date" class="form-control" id="date-of-birth" name="date_of_birth" value="{{ $user->profile->date_of_birth ?? '' }}">
      </div>

      <div class="form-group">
        <label>gender</label>
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{ ($user->profile->gender ?? '') === 'male' ? 'checked': ''}}>
            <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ ($user->profile->gender ?? '') === 'female' ? 'checked': ''}}>
            <label class="form-check-label" for="female">Female</label>
        </div>
      </div>

      <div class="form-group">
        <label for="position">Position</label>
        <input type="text" class="form-control" id="position" name="position" value="{{ $user->profile->position ?? '' }}">
      </div>

      <button class="btn btn-primary" type="submit">Update profile</button>
    </form>
</div>

@endsection
