@extends('task.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit task</div>
  <div class="card-body">
      
      <form action="{{ url('task/' .$tasks->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$tasks->id}}" id="id" />
        <label>Task</label></br>
        <input type="text" name="task" id="task" value="{{$tasks->task}}" class="form-control"></br>
        <label>Done</label></br>
        <input type="checkbox" name="done" id="done" value="{{$tasks->done}}" class="form-check-input"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop