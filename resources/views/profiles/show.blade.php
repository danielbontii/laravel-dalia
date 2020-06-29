@extends('layouts.app')

@section('content')
<div class="text-center w-100">
    <img class="img-fluid rounded" src="//zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png" alt="Avatar" width="100">
</div>
<div class="row w-100">
    <div class="col-md-6">
        <span class="font-weight-bold">Email:</span>
        <span>{{ $user->email }}</span>
    </div>
    <div class="col-md-6">
        <span class="font-weight-bold">Role:</span>
        <span>{{ $user->role }}</span>
    </div>
</div>
@endsection
