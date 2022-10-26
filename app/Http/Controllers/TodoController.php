<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use Illuminate\Support\Facades\Validator;


class TodoController extends Controller
{
    public function index()
    { 
        $todos = Todo::all();
        return view('index', ["todos" => $todos]);
    }

    public function create(Request $request)
    {
        //dd($request->all());
        // validate：バリデーション
        $rules = ['todo' => 'required|max:20'];
        $messages = ['required' => '必須項目です', 'max' => '20文字以下にしてください。'];
        Validator::make($request->all(), $rules, $messages)->validate();

        // insert：登録
        $todo = new Todo; //インスタンス化
        $todo->todo = $request ->input('todo');  //モデル->カラム名 = 値 で、データを割り当てる
        $todo->save(); //データベースに保存
        return redirect('/'); //リダイレクト
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function update(Request $request,$id)
    {
        //dd($request->todo);
        //$todo = new Todo;
        //$todo->todo = $request ->input('todo');
        //$todo->update($request -> todo);
        Todo::find($id)->update(['todo' => $request ->todo]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function delete($id)
    {
        Todo::find($id)->delete();
        return redirect('/');
    }
}
