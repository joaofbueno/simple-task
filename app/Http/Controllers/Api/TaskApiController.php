<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;

class TaskApiController extends Controller
{

    public static function get(string $id = null, bool $isRequest = true) {
        $tasks = [];

        if ($id) {
            
             $tasks = Task::where('id', '=', $id)->get();

        } else {
        
             $tasks = Task::all();

        }

        if ($isRequest) {
            return response()->json($tasks);
        }
        
        return $tasks;
    }

    public function add(Request $request) {
        $data = $request->all();

        // validacao...

        $task = new Task();
        //...
        $task->save();

        return response()->json($task);
    }

    public function update() {

    }

    public function delete() {

    }

}