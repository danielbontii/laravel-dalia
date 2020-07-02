@extends('layouts.app')
<style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 600px;
      margin: auto;
      text-align: center;
      font-family: arial;
      padding-left: 5px;
      padding-right: 5px;
    }

    .title {
      color: grey;
      font-size: 18px;
    }

    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    a {
      text-decoration: none;
      font-size: 15px;
      color: black;
    }

    button:hover, a:hover {
      opacity: 0.7;
    }
    </style>

@section('content')

<div class="card">
  <h1>{{ $user->name }}</h1>
  <p class="title">{{ $user->profile->position }}</p>
<div class="row text-left">
    <div class="col">
        <label for="gender">Gender</label>
        <input type="text" value="{{ $user->profile->gender }}" disabled>
    </div>
    <div class="col">
        <label for="date of birth">Date of birth</label>
        <input type="text" value=" {{ $user->profile->date_of_birth }}" disabled>
    </div>
    <div class="col ">
        <label for="Phone">Phone Number</label>
        <input type="text" value=" {{ $user->profile->telephone }}" disabled>
    </div>
</div> <br/>

<p><button >Email: <a href="mailto:{{ $user->email }}" targe="_blank">{{ $user->email }}</a></button></p>
</div>
@endsection
