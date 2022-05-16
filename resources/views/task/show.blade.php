@extends('task.layout')
@section('content')
<div class="card">
  <div class="card-header">Tasks</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Task : {{ $tasks->task }}</h5>
        <p class="card-text">Done : {{ $tasks->done }}</p>
  </div>
      
    </hr>
  
  </div>
</div>