<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Gate;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = User::join('tasks', 'users.id', '=', 'tasks.user_id')
            ->get();

        return view("tasks.index", [
            "tasks" => $tasks,
        ]);
    }

    public function delete(Request $request)
    {
        $task = Task::find($request->id);
        $this->authorize('delete', $task);
        $task->delete();
        return redirect('/');
    }
}
