<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Redirect;

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

        // $validated = $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'urgency' => 'required'
        // ]);

        // if (!$request->validated()) {
        //     echo 'Formulário não validado';
        //     exit;
        // }

        // echo '<pre>';
        // print_r($request->all());
        // return;

        $task = new Task();
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->checked = isset($data['checked']) && $data['checked'] ? true : false;
        $task->urgency = isset($data['urgency']) && $data['urgency'] ? true : false;
        $task->save();

        // return response()->json($task);
        
        return Redirect::to('/tasks');
    }

    public function update(Request $request, $id) {
        $data = $request->all();

        $task = new Task();
        $task = Task::find($id);

        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->checked = isset($data['checked']) && $data['checked'] ? true : false;
        $task->urgency = isset($data['urgency']) && $data['urgency'] ? true : false;

        if ($task->checked) {
            $task->urgency = false;
        }
        
        $task->save();

        return Redirect::to('/tasks');
    }

    public function delete($id) {
        $task = Task::find($id);
        $task->delete();

        return Redirect::to('/tasks');
    }

}