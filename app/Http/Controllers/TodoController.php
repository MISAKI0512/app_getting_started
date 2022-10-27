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
        // validate：バリデーション
        $rules = ['todo' => 'required|max:20'];
        $message = ['required' => '必須項目です', 'max' => '20文字以下にしてください。'];
        Validator::make($request->all(), $rules, $message)->validate();

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
        // validate：バリデーション
        $rules = ['todo' => 'required|max:20'];
        $message = ['required' => '必須項目です', 'max' => '20文字以下にしてください。'];
        Validator::make($request->all(), $rules, $message)->validate();

        //更新
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
