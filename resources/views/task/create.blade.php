@extends('task.layout')
@section('content')
<div class="card">
  <div class="card-header">Tasks</div>
  <div class="card-body">
      
      <form action="{{ url('task') }}" method="post">
        {!! csrf_field() !!}
        <label>Task</label></br>
        <input type="text" name="task" id="task" class="form-control"></br>
        <label>Done</label></br>
        <input type="checkbox" name="done" id="done" class="form-check-input" value=""></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop