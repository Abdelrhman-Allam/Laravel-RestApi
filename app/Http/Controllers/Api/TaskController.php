<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

# use model Tasks
use App\Task;

class TaskController extends Controller
{
    /**
    *
    * URL /tasks/
    * method GET
    *
    * Get list of tasks
    * 
    * @return response json 
    *
    */
    public function index()
    {
        // load tasks from database
		$tasks = Task::all();
        // return response with code 200 ok
		return response()->json($tasks, 200);
    }


    /**
    *
    * URL /tasks/{id}
    * method GET
    *
    * Get one task
    *
    * @param int $id
    *
    * @return response json 
    */
    public function show($id)
    {
        // get task with id 
		$task = Task::find($id);

        // if not loaded 
		if (!$task) {
            // return error message and response code 404 not found
			return response()->json(["error" => "Task not found, $id"], 404);		
		}


        // response with task and is 200 ok
		return response()->json($task, 200);
    }

    /**
    *
    * URL /tasks
    * method POST
    * 
    * Store task on database
    *
    * @return response json
    */
     function store(Request $request){

        // get all request inputs as array
        $inputs = $request->all();


        /** @TODO: Validate before save into database */

        $task = new Task;
        // set the name from the inputs array
        $task->name = $inputs['name'];
        $task->save();

        // return task as json with respone code 201 create
        return response()->json($task, 201);
    }


    /**
    *
    * URL /tasks
    * method PUT
    * 
    * Update task on the database
    *
    * @param int $id
    *
    * @return response json
    */
    function update(Request $request, $id){

        $inputs = $request->all();

        /** @TODO: Validate before save into database */

        $task = Task::find($id);

        if (!$task) {
            return response()->json(["error" => "Task not found, $id"], 404);       
        }

        $task->name = $inputs['name'];
        $task->save();

        return response()->json($task, 200);
    }

    /**
    *
    * URL /tasks/{$id}
    * method DELETE
    *
    * Delete task from database
    *
    * @param int $id 
    *
    * @return empty array
    */
    function delete(Request $request, $id){

        // find with id
        $task = Task::find($id);

        if (!$task) {
            // return 404 with json message
            return response()->json(["error" => "Task not found, $id"], 404);       
        }

        // delete
        $task->delete();

        // response with json 200 ok
        return response()->json([], 200);
    }
}
