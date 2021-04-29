<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TaskApiController;
use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get(string $id = null)
    {
        $tasks = TaskApiController::get($id, false);

        return view('task.get', [
            'tasks' => $tasks
        ]);
    }


    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        return view('task.add');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $tasks = new Task();
        $tasks = task::where('id', '=', $id)->get();

        return view('task.update', [
            'tasks' => $tasks
        ]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $tasks = new Task();
        $tasks = task::where('id', '=', $id)->get();

        return view('task.delete', [
            'tasks' => $tasks
        ]);
    }



    public function test() {
        return view('child');
    }

}
