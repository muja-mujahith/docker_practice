<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $todos = ToDo::all();
        return view('todo', compact('todos'));
    }

    public function store(Request $request)
    {
        ToDo::create([
            'task' => $request->task
        ]);

        return redirect('/');
    }
}
