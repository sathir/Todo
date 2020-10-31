@extends('layouts.app')

@section('title')
{{$todos->name}}
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{$todos->name}}</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$todos->description}}</li>
        <div class="card-body">  
        <li class="list-group-item"><a href="/edit/{{$todos->id}}" class="btn btn-warning">Edit</a> <a href="/delete/{{$todos->id}}" class="btn btn-danger">delete</a></li>
          </div>
      </ul>
</div>

@endsection