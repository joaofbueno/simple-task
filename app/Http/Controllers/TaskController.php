<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TaskApiController;
use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Redirect;

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

    public function getUrgent($id)
    {
        $tasks = TaskApiController::getUrgent($id);

        return view('task.urgents-tasks', [
            'tasks' => $tasks
        ]);
    }

    public function getChecked($id)
    {
        $tasks = TaskApiController::getChecked($id);

        return view('task.checked-tasks', [
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
        $tasks = TaskApiController::get($id, false);

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
        $tasks = TaskApiController::get($id, false);

        return view('task.delete', [
            'tasks' => $tasks
        ]);
    }

    public function moveUp($id)
    {
        $tasks = TaskApiController::moveUp($id);

        return redirect::to('/tasks');
    }


}
