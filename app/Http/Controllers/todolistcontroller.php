<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\todolist;


class todolistcontroller extends Controller
{   
    public function index(){
        return view('welcome',['lists'=>todolist::all()]);
    }

    public function saveTodo(Request $req){
        $todoObj= new todolist();
        $todoObj->Title = $req->todoName;
        $todoObj->save();

        return redirect('/');
    }

    public function deleteItem($id){
        $data = todolist::find($id);
        $data->delete();
        return redirect('/');
    }

    public function editItem($id){
        $data = todolist::find($id);
        return view('edit',['data'=> $data]);

    }

    public function updateTodo(Request $req){
        $todoObj=todolist::find($req->id);
        $todoObj->Title= $req->updateName;
        $todoObj-> save();
        return redirect('/');

    }
}
