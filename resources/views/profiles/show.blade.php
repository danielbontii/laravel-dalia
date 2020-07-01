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
{{-- <h2 style="text-align:center">User Profile Card</h2> --}}

<div class="text-center w-100">
    <img class="img-fluid rounded" src="//zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png" alt="Avatar" width="100">
</div> <br/>
<div class="card">
  <h1>{{ $user->name }}</h1>
  <p class="title">Role here</p>
<div class="row text-left">
    <div class="col">
        <label for="gender">Gender</label>
        <input type="text" value=" Gender here" disabled>
    </div>
    <div class="col">
        <label for="age">Gender</label>
        <input type="text" value=" Age here" disabled>
    </div>
    <div class="col ">
        <label for="Phone">Phone Number</label>
        <input type="text" value=" Phone Number here" disabled>
    </div>
</div> <br/>

<p><button >Email: <a href="mailto:{{ $user->email }}" targe="_blank">{{ $user->email }}</a></button></p>
</div>
@endsection
