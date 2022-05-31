<?php

namespace App;

use App\Models\Task;


class Count {
  
  public function totalCount() {
    $countTotal = Task::all()->count();
    return $countTotal;
  }

  public function doneCount() {
    $countDone = Task::where('done','=','1')->count();
    return $countDone;
  }

  public function undoneCount() {
    $countUndone = Task::where('done','=','0')->count();
    return $countUndone; 
  }
}

?>
