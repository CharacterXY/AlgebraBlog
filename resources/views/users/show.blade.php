@extends('layouts.master')

@section('content')
  <div class="col-sm-8 blog-main"> 
      <a href=" {{ route('users.index') }}" class="btn btn-danger" role="button">Back</a>
    <h2>User name: {{ $user->name }}</h2>
    <br>
    <section>User email: {{ $user->email }}</section>
    <h3> <i>Zadnja izmjena</i> : {{ $user->updated_at }}</h3>
</div>

@endsection


      
