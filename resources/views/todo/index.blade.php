@extends('layouts.app')

@section('title')
Todo List
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Todo List</h5>
      </div>
      @foreach ($todos as $todo)
      <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$todo->name}} <a href="/show/{{$todo->id}}" class="card-link">View</a> <a href="/edit/{{$todo->id}}" class="text-warning">Edit</a> <a href="/delete/{{$todo->id}}" class="text-danger">delete</a> </li>
        <div class="card-body"> Description : 
        <li class="list-group-item">{{$todo->description}}</li>
          </div>
      </ul>
      @endforeach
</div>
@endsection