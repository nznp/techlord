<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = todo::all();

        return view('todos')->with('todos', $todos);
    }

    public function store(Request $request)
    {
        $todo =new todo;

        $todo->todo = $request->todo;
        $todo->save();
        Session::flash('success', 'Your todo was created.');
        return redirect()->back();
    }

    public function delete($id)
    {
        $todo = todo::find($id);

        $todo->delete();
        Session::flash('success', 'Your todo was deleted.');

        return redirect()->back();
    }

    public function update($id)
    {
        $todo = todo::find($id);
        Session::flash('success', 'Your todo was updated.');

       return view('update')->with('todo', $todo);
    }

    public function completed($id)
    {
        $todo = todo::find($id); 

        $todo->completed = 1;
        $todo->save();
        Session::flash('success', 'Your todo was marked as completed.');

        return redirect()->back();

    }

    public function save(Request $request, $id)
    {
        $todo = todo::find($id);

        $todo->todo = $request->todo;
        $todo->save();

        return redirect()->route('todos');
    }
}
